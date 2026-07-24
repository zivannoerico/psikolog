<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GaleriResource\Pages;
use App\Models\Galeri;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

class GaleriResource extends Resource
{
    protected static ?string $model = Galeri::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationLabel = 'Galeri';

    protected static ?string $navigationGroup = 'Konten';

    protected static ?int $navigationSort = 6;

    protected static ?string $modelLabel = 'Foto Galeri';

    protected static ?string $pluralModelLabel = 'Galeri';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Upload Foto')
                    ->schema([
                        Forms\Components\FileUpload::make('gambar')
                            ->label('Pilih Foto')
                            ->image()
                            ->directory('galeri')
                            ->maxSize(4096)
                            ->required()
                            ->imageEditor()
                            ->columnSpanFull()
                            ->helperText('Format: JPG, PNG. Maks 4MB. Usahakan ukuran minimal 800x600px.')
                            ->deleteUploadedFileUsing(fn ($file) => Storage::disk('public')->delete($file)),

                        Forms\Components\TextInput::make('judul')
                            ->label('Judul / Keterangan Foto')
                            ->maxLength(255)
                            ->placeholder('Contoh: Suasana konseling di An Moerty'),

                        Forms\Components\TextInput::make('alt')
                            ->label('Teks Alternatif (SEO)')
                            ->maxLength(255)
                            ->placeholder('Contoh: Ruang konseling yang nyaman dan profesional'),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Pengaturan')
                    ->schema([
                        Forms\Components\TextInput::make('urutan')
                            ->label('Urutan Tampil')
                            ->numeric()
                            ->default(0)
                            ->helperText('Semakin kecil angkanya, semakin atas posisinya.'),

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
                Tables\Columns\ImageColumn::make('gambar')
                    ->label('Foto')
                    ->disk('public')
                    ->width(80)
                    ->height(56)
                    ->sortable(false),

                Tables\Columns\TextColumn::make('judul')
                    ->label('Keterangan')
                    ->searchable()
                    ->limit(50),

                Tables\Columns\IconColumn::make('aktif')
                    ->label('Aktif')
                    ->boolean()
                    ->sortable(),

                Tables\Columns\TextColumn::make('urutan')
                    ->label('Urutan')
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Diunggah')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('urutan', 'asc')
            ->filters([
                Tables\Filters\TernaryFilter::make('aktif')
                    ->label('Status')
                    ->trueLabel('Aktif')
                    ->falseLabel('Tidak Aktif'),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('Ubah'),
                Tables\Actions\DeleteAction::make()
                    ->label('Hapus')
                    ->after(function (Galeri $record) {
                        if ($record->gambar) {
                            Storage::disk('public')->delete($record->gambar);
                        }
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->label('Hapus yang Dipilih')
                        ->after(function ($records) {
                            foreach ($records as $record) {
                                if ($record->gambar) {
                                    Storage::disk('public')->delete($record->gambar);
                                }
                            }
                        }),
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
            'index'  => Pages\ListGaleris::route('/'),
            'create' => Pages\CreateGaleri::route('/create'),
            'edit'   => Pages\EditGaleri::route('/{record}/edit'),
        ];
    }
}