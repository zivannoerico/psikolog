<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?string $navigationLabel = 'Pengaturan Website';

    protected static ?string $navigationGroup = 'Pengaturan';

    protected static ?int $navigationSort = 1;

    protected static ?string $modelLabel = 'Pengaturan';

    protected static ?string $pluralModelLabel = 'Pengaturan Website';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('key')
                    ->label('Kunci Setting')
                    ->required()
                    ->disabled(fn ($record) => $record !== null)
                    ->helperText('Kunci tidak bisa diubah setelah disimpan.'),

                Forms\Components\TextInput::make('label')
                    ->label('Label / Nama Setting')
                    ->maxLength(255),

                Forms\Components\Select::make('group')
                    ->label('Grup')
                    ->options([
                        'hero'    => 'Hero',
                        'tentang' => 'Tentang',
                        'kontak'  => 'Kontak',
                        'sosmed'  => 'Sosial Media',
                        'seo'     => 'SEO',
                        'footer'  => 'Footer',
                        'umum'    => 'Umum',
                    ])
                    ->default('umum'),

                Forms\Components\Select::make('type')
                    ->label('Tipe')
                    ->options([
                        'text'     => 'Text',
                        'textarea' => 'Textarea',
                        'image'    => 'Image',
                        'boolean'  => 'Boolean',
                        'json'     => 'JSON',
                    ])
                    ->live()
                    ->default('text'),

                Forms\Components\TextInput::make('value')
                    ->label('Nilai')
                    ->columnSpanFull()
                    ->visible(fn (Forms\Get $get) => in_array($get('type'), ['text', 'json'])),

                Forms\Components\Textarea::make('value')
                    ->label('Nilai')
                    ->rows(4)
                    ->columnSpanFull()
                    ->visible(fn (Forms\Get $get) => $get('type') === 'textarea'),

                Forms\Components\FileUpload::make('value')
                    ->label('Gambar')
                    ->image()
                    ->directory('settings')
                    ->columnSpanFull()
                    ->deleteUploadedFileUsing(fn ($file) => Storage::disk('public')->delete($file))
                    ->visible(fn (Forms\Get $get) => $get('type') === 'image'),

                Forms\Components\Toggle::make('value')
                    ->label('Nilai Boolean')
                    ->columnSpanFull()
                    ->visible(fn (Forms\Get $get) => $get('type') === 'boolean'),
            ])
            ->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('group')
                    ->label('Grup')
                    ->badge()
                    ->color('gray')
                    ->sortable(),

                Tables\Columns\TextColumn::make('label')
                    ->label('Nama Setting')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('key')
                    ->label('Kunci')
                    ->searchable()
                    ->fontFamily('mono')
                    ->copyable(),

                Tables\Columns\TextColumn::make('value')
                    ->label('Nilai')
                    ->limit(50)
                    ->placeholder('(kosong)'),

                Tables\Columns\TextColumn::make('type')
                    ->label('Tipe')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'text'     => 'info',
                        'textarea' => 'warning',
                        'image'    => 'success',
                        'boolean'  => 'danger',
                        default    => 'gray',
                    }),
            ])
            ->defaultSort('group')
            ->groups(['group'])
            ->filters([
                Tables\Filters\SelectFilter::make('group')
                    ->label('Grup')
                    ->options([
                        'hero'    => 'Hero',
                        'tentang' => 'Tentang',
                        'kontak'  => 'Kontak',
                        'sosmed'  => 'Sosial Media',
                        'seo'     => 'SEO',
                        'footer'  => 'Footer',
                        'umum'    => 'Umum',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->after(function (Setting $record) {
                        // Clear cache when setting is updated
                        Cache::forget("setting.{$record->key}");
                    }),
            ])
            ->bulkActions([]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit'   => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
