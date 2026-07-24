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
                            ->helperText('Upload foto profil (maks 2MB). Usahakan foto dengan latar belakang bersih.')
                            ->deleteUploadedFileUsing(fn ($file) => Storage::disk('public')->delete($file)),

                        Forms\Components\TextInput::make('nama')
                            ->label('Nama Lengkap')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Contoh: Dr. Ahmad Fauzi'),

                        Forms\Components\TextInput::make('gelar')
                            ->label('Gelar / Titel')
                            ->maxLength(255)
                            ->placeholder('Contoh: M.Psi., Psikolog'),

                        Forms\Components\TextInput::make('spesialisasi')
                            ->label('Spesialisasi')
                            ->maxLength(255)
                            ->placeholder('Contoh: Psikologi Klinis, Konseling Karir'),

                        Forms\Components\Textarea::make('bio')
                            ->label('Biografi Singkat')
                            ->rows(4)
                            ->maxLength(1000)
                            ->columnSpanFull()
                            ->placeholder('Tulis biografi singkat tentang psikolog ini...'),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Media Sosial')
                    ->schema([
                        Forms\Components\TextInput::make('instagram')
                            ->label('Akun Instagram')
                            ->url()
                            ->prefix('https://')
                            ->placeholder('instagram.com/nama_akun')
                            ->helperText('Masukkan URL lengkap Instagram.'),

                        Forms\Components\TextInput::make('linkedin')
                            ->label('Akun LinkedIn')
                            ->url()
                            ->prefix('https://')
                            ->placeholder('linkedin.com/in/nama-akun')
                            ->helperText('Masukkan URL lengkap LinkedIn.'),
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
                    ->label('Urutan')
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
                Tables\Actions\EditAction::make()
                    ->label('Ubah'),
                Tables\Actions\DeleteAction::make()
                    ->label('Hapus')
                    ->after(function (Psikolog $record) {
                        if ($record->foto) {
                            Storage::disk('public')->delete($record->foto);
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
            'index'  => Pages\ListPsikologs::route('/'),
            'create' => Pages\CreatePsikolog::route('/create'),
            'edit'   => Pages\EditPsikolog::route('/{record}/edit'),
        ];
    }
}