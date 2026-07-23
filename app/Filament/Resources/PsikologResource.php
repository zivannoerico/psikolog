<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PsikologResource\Pages;
use App\Models\Psikolog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

class PsikologResource extends Resource
{
    protected static ?string $model = Psikolog::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationLabel = 'Tim Psikolog';

    protected static ?string $navigationGroup = 'Konten';

    protected static ?int $navigationSort = 5;

    protected static ?string $modelLabel = 'Psikolog';

    protected static ?string $pluralModelLabel = 'Tim Psikolog';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Identitas')
                    ->schema([
                        Forms\Components\FileUpload::make('foto')
                            ->label('Foto Profil')
                            ->image()
                            ->directory('psikolog')
                            ->maxSize(2048)
                            ->avatar()
                            ->columnSpanFull()
                            ->deleteUploadedFileUsing(fn ($file) => Storage::disk('public')->delete($file)),

                        Forms\Components\TextInput::make('nama')
                            ->label('Nama Lengkap')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('gelar')
                            ->label('Gelar / Titel')
                            ->maxLength(255)
                            ->placeholder('contoh: M.Psi., Psikolog'),

                        Forms\Components\TextInput::make('spesialisasi')
                            ->label('Spesialisasi')
                            ->maxLength(255)
                            ->placeholder('contoh: Psikologi Klinis, Konseling Karir'),

                        Forms\Components\Textarea::make('bio')
                            ->label('Biografi Singkat')
                            ->rows(4)
                            ->maxLength(1000)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Media Sosial')
                    ->schema([
                        Forms\Components\TextInput::make('instagram')
                            ->label('URL Instagram')
                            ->url()
                            ->prefix('https://')
                            ->placeholder('instagram.com/nama_akun'),

                        Forms\Components\TextInput::make('linkedin')
                            ->label('URL LinkedIn')
                            ->url()
                            ->prefix('https://')
                            ->placeholder('linkedin.com/in/nama-akun'),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Pengaturan')
                    ->schema([
                        Forms\Components\TextInput::make('urutan')
                            ->label('Urutan Tampil')
                            ->numeric()
                            ->default(0),

                        Forms\Components\Toggle::make('aktif')
                            ->label('Tampilkan di Website')
                            ->default(true),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('foto')
                    ->label('')
                    ->disk('public')
                    ->width(44)
                    ->height(44)
                    ->circular()
                    ->defaultImageUrl(fn (Psikolog $record) => 'https://ui-avatars.com/api/?name=' . urlencode($record->nama) . '&background=C8607A&color=fff'),

                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama')
                    ->searchable()
                    ->description(fn (Psikolog $record) => $record->gelar),

                Tables\Columns\TextColumn::make('spesialisasi')
                    ->label('Spesialisasi')
                    ->searchable()
                    ->toggleable(),

                Tables\Columns\IconColumn::make('aktif')
                    ->label('Aktif')
                    ->boolean()
                    ->sortable(),

                Tables\Columns\TextColumn::make('urutan')
                    ->label('#')
                    ->sortable(),
            ])
            ->defaultSort('urutan', 'asc')
            ->filters([
                Tables\Filters\TernaryFilter::make('aktif')
                    ->label('Status')
                    ->trueLabel('Aktif')
                    ->falseLabel('Tidak Aktif'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->after(function (Psikolog $record) {
                        if ($record->foto) {
                            Storage::disk('public')->delete($record->foto);
                        }
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListPsikologs::route('/'),
            'create' => Pages\CreatePsikolog::route('/create'),
            'edit'   => Pages\EditPsikolog::route('/{record}/edit'),
        ];
    }
}
