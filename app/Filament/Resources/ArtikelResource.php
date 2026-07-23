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
                Forms\Components\Section::make('Informasi Utama')
                    ->schema([
                        Forms\Components\Select::make('kategori_artikel_id')
                            ->label('Kategori')
                            ->relationship('kategori', 'nama')
                            ->options(KategoriArtikel::pluck('nama', 'id'))
                            ->searchable()
                            ->preload(),

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
                            ->helperText('URL artikel, diisi otomatis dari judul.'),

                        Forms\Components\Select::make('status')
                            ->options([
                                'draft'     => 'Draft',
                                'published' => 'Published',
                                'archived'  => 'Archived',
                            ])
                            ->required()
                            ->default('draft'),

                        Forms\Components\DateTimePicker::make('published_at')
                            ->label('Tanggal Terbit')
                            ->default(now()),

                        Forms\Components\TextInput::make('penulis')
                            ->label('Nama Penulis')
                            ->maxLength(255),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Konten')
                    ->schema([
                        Forms\Components\RichEditor::make('konten')
                            ->label('Isi Artikel')
                            ->required()
                            ->columnSpanFull()
                            ->fileAttachmentsDirectory('artikel/konten'),

                        Forms\Components\Textarea::make('excerpt')
                            ->label('Ringkasan Singkat')
                            ->maxLength(500)
                            ->rows(3)
                            ->columnSpanFull()
                            ->helperText('Maks. 500 karakter. Diisi otomatis jika dikosongkan.'),
                    ]),

                Forms\Components\Section::make('Gambar')
                    ->schema([
                        Forms\Components\FileUpload::make('gambar_utama')
                            ->label('Gambar Utama')
                            ->image()
                            ->directory('artikel')
                            ->maxSize(2048)
                            ->imageEditor()
                            ->deleteUploadedFileUsing(fn ($file) => Storage::disk('public')->delete($file)),

                        Forms\Components\TextInput::make('alt_gambar')
                            ->label('Alt Text Gambar (SEO)')
                            ->maxLength(255),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Tags')
                    ->schema([
                        Forms\Components\TagsInput::make('tags')
                            ->label('Tag Artikel')
                            ->placeholder('Ketik tag lalu tekan Enter')
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('SEO')
                    ->schema([
                        Forms\Components\TextInput::make('meta_title')
                            ->label('Meta Title')
                            ->maxLength(255)
                            ->helperText('Biarkan kosong untuk menggunakan judul artikel.'),

                        Forms\Components\Textarea::make('meta_description')
                            ->label('Meta Description')
                            ->maxLength(500)
                            ->rows(3)
                            ->helperText('Maks. 160 karakter direkomendasikan.'),
                    ])
                    ->columns(2)
                    ->collapsed(),
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
                    ->badge()
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
                    ->label('Views')
                    ->numeric()
                    ->sortable()
                    ->alignEnd(),
            ])
            ->defaultSort('published_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'draft'     => 'Draft',
                        'published' => 'Published',
                        'archived'  => 'Archived',
                    ]),

                Tables\Filters\SelectFilter::make('kategori_artikel_id')
                    ->label('Kategori')
                    ->relationship('kategori', 'nama'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    // ->after(function (Artikel $record) {
                    //     if ($record->gambar_utama) {
                    //         Storage::disk('public')->delete($record->gambar_utama);
                    //     }
                    // })
                    ,
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        // ->after(function ($records) {
                        //     foreach ($records as $record) {
                        //         if ($record->gambar_utama) {
                        //             Storage::disk('public')->delete($record->gambar_utama);
                        //         }
                        //     }
                        // })
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
