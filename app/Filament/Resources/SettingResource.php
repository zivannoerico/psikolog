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
                    ->label('Kode Setting')
                    ->required()
                    ->disabled(fn ($record) => $record !== null)
                    ->helperText('Kode unik untuk setting ini (tidak bisa diubah setelah disimpan). Contoh: hero_judul, about_deskripsi'),

                Forms\Components\TextInput::make('label')
                    ->label('Nama Setting')
                    ->maxLength(255)
                    ->placeholder('Contoh: Judul Hero, Deskripsi About')
                    ->helperText('Nama yang mudah dipahami untuk setting ini.'),

                Forms\Components\Select::make('group')
                    ->label('Kelompok')
                    ->options([
                        'hero'    => 'Hero (Banner Utama)',
                        'tentang' => 'Halaman Tentang',
                        'kontak'  => 'Informasi Kontak',
                        'sosmed'  => 'Sosial Media',
                        'seo'     => 'SEO (Mesin Pencari)',
                        'footer'  => 'Footer',
                        'umum'    => 'Umum',
                    ])
                    ->default('umum')
                    ->helperText('Kelompok halaman tempat setting ini digunakan.'),

                Forms\Components\Select::make('type')
                    ->label('Tipe Data')
                    ->options([
                        'text'     => 'Teks Pendek',
                        'textarea' => 'Teks Panjang',
                        'image'    => 'Gambar',
                        'boolean'  => 'Ya/Tidak',
                        'json'     => 'Data Kompleks (JSON)',
                    ])
                    ->live()
                    ->default('text')
                    ->helperText('Pilih tipe data yang sesuai dengan isi setting ini.'),

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
                    ->label('Upload Gambar')
                    ->image()
                    ->directory('settings')
                    ->columnSpanFull()
                    ->helperText('Upload gambar untuk setting ini.')
                    ->deleteUploadedFileUsing(fn ($file) => Storage::disk('public')->delete($file))
                    ->visible(fn (Forms\Get $get) => $get('type') === 'image'),

                Forms\Components\Toggle::make('value')
                    ->label('Nilai (Ya/Tidak)')
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
                    ->label('Kelompok')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'hero'    => 'Hero',
                        'tentang' => 'Tentang',
                        'kontak'  => 'Kontak',
                        'sosmed'  => 'Sosmed',
                        'seo'     => 'SEO',
                        'footer'  => 'Footer',
                        'umum'    => 'Umum',
                    })
                    ->color('gray')
                    ->sortable(),

                Tables\Columns\TextColumn::make('label')
                    ->label('Nama Setting')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('key')
                    ->label('Kode')
                    ->searchable()
                    ->fontFamily('mono')
                    ->copyable()
                    ->copyMessage('Kode berhasil disalin!'),

                Tables\Columns\TextColumn::make('value')
                    ->label('Nilai')
                    ->limit(50)
                    ->placeholder('(kosong)'),

                Tables\Columns\TextColumn::make('type')
                    ->label('Tipe')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'text'     => 'Teks',
                        'textarea' => 'Teks Panjang',
                        'image'    => 'Gambar',
                        'boolean'  => 'Ya/Tidak',
                        'json'     => 'JSON',
                    })
                    ->color(fn (string $state): string => match ($state) {
                        'text'     => 'info',
                        'textarea' => 'warning',
                        'image'    => 'success',
                        'boolean'  => 'danger',
                        'json'     => 'gray',
                    }),
            ])
            ->defaultSort('group')
            ->groups(['group'])
            ->filters([
                Tables\Filters\SelectFilter::make('group')
                    ->label('Kelompok')
                    ->options([
                        'hero'    => 'Hero',
                        'tentang' => 'Tentang',
                        'kontak'  => 'Kontak',
                        'sosmed'  => 'Sosmed',
                        'seo'     => 'SEO',
                        'footer'  => 'Footer',
                        'umum'    => 'Umum',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('Ubah')
                    ->after(function (Setting $record) {
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