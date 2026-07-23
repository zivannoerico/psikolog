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

class ArtikelResource extends Resource
{
    protected static ?string $model = Artikel::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('kategori_artikel_id')
                    ->label('Kategori')
                    ->relationship('kategori', 'nama')
                    ->options(KategoriArtikel::pluck('nama', 'id'))
                    ->searchable()
                    ->preload(),
                Forms\Components\TextInput::make('judul')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', \Illuminate\Support\Str::slug($state))),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(Artikel::class, 'slug', ignoreRecord: true),
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
                Forms\Components\FileUpload::make('gambar_utama')
                    ->label('Gambar Utama')
                    ->image()
                    ->directory('artikel')
                    ->maxSize(2048),
                Forms\Components\TextInput::make('alt_gambar')
                    ->label('Alt Text Gambar')
                    ->maxLength(255),
                Forms\Components\RichEditor::make('konten')
                    ->required()
                    ->columnSpanFull()
                    ->fileAttachmentsDirectory('artikel/konten'),
                Forms\Components\Textarea::make('excerpt')
                    ->label('Ringkasan')
                    ->maxLength(500)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('penulis')
                    ->maxLength(255),
                Forms\Components\TagsInput::make('tags'),
                Forms\Components\TextInput::make('meta_title')
                    ->label('Meta Title (SEO)')
                    ->maxLength(255),
                Forms\Components\Textarea::make('meta_description')
                    ->label('Meta Description (SEO)')
                    ->maxLength(500),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->searchable()
                    ->limit(40),
                Tables\Columns\TextColumn::make('kategori.nama')
                    ->label('Kategori')
                    ->sortable(),
                Tables\Columns\TextColumn::make('penulis')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'published' => 'success',
                        'draft'     => 'warning',
                        'archived'  => 'danger',
                    }),
                Tables\Columns\TextColumn::make('published_at')
                    ->label('Tanggal Terbit')
                    ->dateTime('d M Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('views')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
                Tables\Actions\DeleteAction::make(),
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
            'index'  => Pages\ListArtikels::route('/'),
            'create' => Pages\CreateArtikel::route('/create'),
            'edit'   => Pages\EditArtikel::route('/{record}/edit'),
        ];
    }
}
