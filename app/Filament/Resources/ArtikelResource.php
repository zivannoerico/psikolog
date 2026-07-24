<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArtikelResource\Pages;
use App\Models\Artikel;
use App\Models\KategoriArtikel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

class ArtikelResource extends Resource
{
    protected static ?string $model = Artikel::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationLabel = 'Artikel';

    protected static ?string $navigationGroup = 'Konten';

    protected static ?int $navigationSort = 2;

    protected static ?string $modelLabel = 'Artikel';

    protected static ?string $pluralModelLabel = 'Artikel';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(3)
                    ->schema([
                        Forms\Components\Group::make()
                            ->schema([
                                Forms\Components\Section::make('Informasi Utama')
                                    ->schema([
                                        Forms\Components\TextInput::make('judul')
                                            ->label('Judul Artikel')
                                            ->required()
                                            ->maxLength(255)
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(fn ($state, callable $set) => $set('slug', \Illuminate\Support\Str::slug($state))),

                                        Forms\Components\TextInput::make('slug')
                                            ->required()
                                            ->maxLength(255)
                                            ->unique(Artikel::class, 'slug', ignoreRecord: true)
                                            ->helperText('Link artikel (diisi otomatis dari judul).'),

                                        Forms\Components\TextInput::make('penulis')
                                            ->label('Nama Penulis')
                                            ->maxLength(255)
                                            ->placeholder('Contoh: Tim An Moerty Psikologi'),
                                    ]),

                                Forms\Components\Section::make('Konten')
                                    ->schema([
                                        Forms\Components\RichEditor::make('konten')
                                            ->label('Isi Artikel')
                                            ->required()
                                            ->columnSpanFull()
                                            ->fileAttachmentsDirectory('artikel/konten')
                                            ->helperText('Tulis konten artikel di sini. Bisa tambah gambar, tabel, dan format teks.'),

                                        Forms\Components\Textarea::make('excerpt')
                                            ->label('Ringkasan Singkat')
                                            ->maxLength(500)
                                            ->rows(3)
                                            ->columnSpanFull()
                                            ->helperText('Cuplikan pendek yang muncul di halaman daftar artikel. Maks. 500 karakter.'),
                                    ]),

                                Forms\Components\Section::make('SEO (untuk mesin pencari)')
                                    ->schema([
                                        Forms\Components\TextInput::make('meta_title')
                                            ->label('Judul SEO')
                                            ->maxLength(255)
                                            ->helperText('Judul yang muncul di Google. Biarkan kosong untuk menggunakan judul artikel.'),

                                        Forms\Components\Textarea::make('meta_description')
                                            ->label('Deskripsi SEO')
                                            ->maxLength(500)
                                            ->rows(3)
                                            ->helperText('Deskripsi yang muncul di hasil pencarian Google. Maks. 160 karakter dianjurkan.'),
                                    ])
                                    ->collapsed(),
                            ])
                            ->columnSpan(['sm' => 3, 'md' => 2]),

                        Forms\Components\Group::make()
                            ->schema([
                                Forms\Components\Section::make('Pengaturan Publikasi')
                                    ->schema([
                                        Forms\Components\Select::make('status')
                                            ->label('Status')
                                            ->options([
                                                'draft'     => 'Draft (Konsep)',
                                                'published' => 'Terbitkan',
                                                'archived'  => 'Arsipkan',
                                            ])
                                            ->required()
                                            ->default('draft')
                                            ->helperText('Draft = masih diketik. Published = sudah tampil di website. Archived = disembunyikan.'),

                                        Forms\Components\DateTimePicker::make('published_at')
                                            ->label('Tanggal Terbit')
                                            ->default(now()),

                                        Forms\Components\Select::make('kategori_artikel_id')
                                            ->label('Kategori')
                                            ->relationship('kategori', 'nama')
                                            ->options(KategoriArtikel::pluck('nama', 'id'))
                                            ->searchable()
                                            ->preload()
                                            ->required(),
                                    ]),

                                Forms\Components\Section::make('Media & Metadata')
                                    ->schema([
                                        Forms\Components\FileUpload::make('gambar_utama')
                                            ->label('Gambar Utama')
                                            ->image()
                                            ->directory('artikel')
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->helperText('Maks 2MB. Rekomendasi 1200x630px.'),

                                        Forms\Components\TextInput::make('alt_gambar')
                                            ->label('Teks Alternatif (Alt)')
                                            ->maxLength(255)
                                            ->helperText('Deskripsi untuk SEO/pembaca layar.'),
                                        
                                        Forms\Components\TagsInput::make('tags')
                                            ->label('Tag Artikel')
                                            ->placeholder('Tekan Enter untuk menambah tag')
                                            ->helperText('Contoh: kecemasan, karir'),
                                    ]),
                            ])
                            ->columnSpan(['sm' => 3, 'md' => 1]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('gambar_utama')
                    ->label('')
                    ->disk('public')
                    ->width(56)
                    ->height(40)
                    ->defaultImageUrl(fn () => 'https://ui-avatars.com/api/?name=Artikel&background=C8607A&color=fff')
                    ->rounded(),

                Tables\Columns\TextColumn::make('judul')
                    ->label('Judul')
                    ->searchable()
                    ->limit(55)
                    ->wrap(),

                Tables\Columns\TextColumn::make('kategori.nama')
                    ->label('Kategori')
                    ->badge()
                    ->color('gray')
                    ->sortable(),

                Tables\Columns\TextColumn::make('penulis')
                    ->label('Penulis')
                    ->searchable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'published' => 'Terbit',
                        'draft'     => 'Konsep',
                        'archived'  => 'Arsip',
                    })
                    ->color(fn (string $state): string => match ($state) {
                        'published' => 'success',
                        'draft'     => 'warning',
                        'archived'  => 'danger',
                    }),

                Tables\Columns\TextColumn::make('published_at')
                    ->label('Terbit')
                    ->dateTime('d M Y')
                    ->sortable(),

                Tables\Columns\TextColumn::make('views')
                    ->label('Dilihat')
                    ->numeric()
                    ->sortable()
                    ->alignEnd(),
            ])
            ->defaultSort('published_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        'draft'     => 'Konsep',
                        'published' => 'Terbit',
                        'archived'  => 'Arsip',
                    ]),

                Tables\Filters\SelectFilter::make('kategori_artikel_id')
                    ->label('Kategori')
                    ->relationship('kategori', 'nama'),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('Ubah'),
                Tables\Actions\DeleteAction::make()
                    ->label('Hapus')
                    ->modalHeading(fn ($record) => 'Hapus Artikel: ' . \Illuminate\Support\Str::limit(strip_tags($record->judul), 30))
                    ->modalDescription('Apakah Anda yakin ingin menghapus artikel ini? Tindakan ini tidak dapat dibatalkan.'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->label('Hapus yang Dipilih'),
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
            'index'  => Pages\ListArtikels::route('/'),
            'create' => Pages\CreateArtikel::route('/create'),
            'edit'   => Pages\EditArtikel::route('/{record}/edit'),
        ];
    }
}