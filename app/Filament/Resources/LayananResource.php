<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LayananResource\Pages;
use App\Models\KategoriLayanan;
use App\Models\Layanan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

class LayananResource extends Resource
{
    protected static ?string $model = Layanan::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationLabel = 'Layanan';

    protected static ?string $navigationGroup = 'Layanan';

    protected static ?int $navigationSort = 1;

    protected static ?string $modelLabel = 'Layanan';

    protected static ?string $pluralModelLabel = 'Layanan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Dasar')
                    ->schema([
                        Forms\Components\Select::make('kategori_layanan_id')
                            ->label('Kategori Layanan')
                            ->relationship('kategori', 'nama')
                            ->options(KategoriLayanan::pluck('nama', 'id'))
                            ->searchable()
                            ->preload()
                            ->required()
                            ->helperText('Pilih kategori yang sesuai dengan layanan ini.'),

                        Forms\Components\TextInput::make('nama')
                            ->label('Nama Layanan')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn ($state, callable $set) => $set('slug', \Illuminate\Support\Str::slug($state))),

                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(Layanan::class, 'slug', ignoreRecord: true)
                            ->helperText('Diisi otomatis dari nama layanan. Contoh: "konseling-psikologi'),

                        Forms\Components\Select::make('ikon')
                            ->label('Ikon')
                            ->options([
                                'clipboard-list'   => 'Clipboard List (Asesmen)',
                                'message-circle'   => 'Message Circle (Konseling)',
                                'users-round'      => 'Users (Tim/Kelompok)',
                                'briefcase'        => 'Briefcase (Kerja)',
                                'shield-heart'     => 'Shield Heart (Perlindungan)',
                                'presentation'     => 'Presentation (Training)',
                            ])
                            ->searchable()
                            ->helperText('Pilih ikon yang mewakili layanan ini.'),

                        Forms\Components\TextInput::make('urutan')
                            ->label('Urutan Tampil')
                            ->numeric()
                            ->default(0)
                            ->helperText('Nomor urut tampil di website (semakin kecil semakin atas).'),

                        Forms\Components\Toggle::make('aktif')
                            ->label('Tampilkan di Website')
                            ->default(true),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Deskripsi')
                    ->schema([
                        Forms\Components\Textarea::make('deskripsi_singkat')
                            ->label('Deskripsi Singkat')
                            ->required()
                            ->rows(3)
                            ->maxLength(500)
                            ->columnSpanFull()
                            ->helperText('Deskripsi pendek yang muncul di kartu layanan halaman utama. Maksimal 500 karakter.'),

                        Forms\Components\RichEditor::make('deskripsi_lengkap')
                            ->label('Deskripsi Lengkap')
                            ->columnSpanFull()
                            ->fileAttachmentsDirectory('layanan/konten')
                            ->helperText('Penjelasan detail layanan yang akan muncul di halaman detail layanan.'),
                    ]),

                Forms\Components\Section::make('Manfaat & Proses')
                    ->schema([
                        Forms\Components\Repeater::make('manfaat')
                            ->label('Daftar Manfaat')
                            ->schema([
                                Forms\Components\TextInput::make('item')
                                    ->label('Manfaat')
                                    ->required()
                                    ->placeholder('Contoh: Meningkatkan kepercayaan diri'),
                            ])
                            ->addActionLabel('+ Tambah Manfaat')
                            ->collapsible()
                            ->defaultItems(0)
                            ->helperText('Manfaat yang akan didapatkan oleh klien dari layanan ini.'),

                        Forms\Components\Repeater::make('proses')
                            ->label('Tahapan Proses')
                            ->schema([
                                Forms\Components\TextInput::make('langkah')
                                    ->label('Nama Tahap')
                                    ->required()
                                    ->placeholder('Contoh: Konsultasi Awal'),
                                Forms\Components\TextInput::make('deskripsi')
                                    ->label('Penjelasan')
                                    ->placeholder('Contoh: Diskusi awal untuk menggali kebutuhan'),
                            ])
                            ->addActionLabel('+ Tambah Langkah')
                            ->collapsible()
                            ->defaultItems(0)
                            ->helperText('Langkah-langkah yang akan dijalani klien saat menggunakan layanan ini.'),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Gambar')
                    ->schema([
                        Forms\Components\FileUpload::make('gambar')
                            ->label('Gambar Layanan')
                            ->image()
                            ->directory('layanan')
                            ->maxSize(2048)
                            ->imageEditor()
                            ->helperText('Upload gambar (maks 2MB)')
                            ->deleteUploadedFileUsing(fn ($file) => Storage::disk('public')->delete($file)),

                        Forms\Components\TextInput::make('alt_gambar')
                            ->label('Teks Alternatif Gambar')
                            ->maxLength(255)
                            ->helperText('Deskripsi singkat gambar untuk SEO dan aksesibilitas. Contoh: "Konseling psikologi di An Moerty"'),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('SEO (untuk mesin pencari)')
                    ->schema([
                        Forms\Components\TextInput::make('meta_title')
                            ->label('Judul SEO')
                            ->maxLength(255)
                            ->helperText('Judul yang muncul di pencarian Google. Biarkan kosong untuk menggunakan nama layanan.'),

                        Forms\Components\Textarea::make('meta_description')
                            ->label('Deskripsi SEO')
                            ->maxLength(500)
                            ->rows(3)
                            ->helperText('Deskripsi yang muncul di pencarian Google. Maksimal 160 karakter dianjurkan.'),
                    ])
                    ->columns(2)
                    ->collapsed(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('gambar')
                    ->label('')
                    ->disk('public')
                    ->width(56)
                    ->height(40)
                    ->defaultImageUrl(fn () => 'https://ui-avatars.com/api/?name=Layanan&background=C8607A&color=fff'),

                Tables\Columns\TextColumn::make('urutan')
                    ->label('Urutan')
                    ->sortable(),

                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama Layanan')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('kategori.nama')
                    ->label('Kategori')
                    ->badge()
                    ->color('gray')
                    ->sortable(),

                Tables\Columns\IconColumn::make('aktif')
                    ->label('Aktif')
                    ->boolean()
                    ->sortable(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diperbarui')
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

                Tables\Filters\SelectFilter::make('kategori_layanan_id')
                    ->label('Kategori')
                    ->relationship('kategori', 'nama'),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('Ubah'),
                Tables\Actions\DeleteAction::make()
                    ->label('Hapus')
                    ->after(function (Layanan $record) {
                        if ($record->gambar) {
                            Storage::disk('public')->delete($record->gambar);
                        }
                    }),
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
            'index'  => Pages\ListLayanans::route('/'),
            'create' => Pages\CreateLayanan::route('/create'),
            'edit'   => Pages\EditLayanan::route('/{record}/edit'),
        ];
    }
}
