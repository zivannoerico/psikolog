<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimoniResource\Pages;
use App\Models\Testimoni;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

class TestimoniResource extends Resource
{
    protected static ?string $model = Testimoni::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-ellipsis';

    protected static ?string $navigationLabel = 'Testimoni';

    protected static ?string $navigationGroup = 'Konten';

    protected static ?int $navigationSort = 3;

    protected static ?string $modelLabel = 'Testimoni';

    protected static ?string $pluralModelLabel = 'Testimoni';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Identitas Pemberi Testimoni')
                    ->schema([
                        Forms\Components\TextInput::make('nama')
                            ->label('Nama Klien')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Contoh: Siti Rahmawati'),

                        Forms\Components\TextInput::make('jabatan')
                            ->label('Pekerjaan / Jabatan')
                            ->maxLength(255)
                            ->placeholder('Contoh: Karyawan Swasta'),

                        Forms\Components\TextInput::make('institusi')
                            ->label('Asal Institusi')
                            ->maxLength(255)
                            ->placeholder('Contoh: PT Maju Jaya'),

                        Forms\Components\FileUpload::make('foto')
                            ->label('Foto (opsional)')
                            ->image()
                            ->directory('testimoni')
                            ->maxSize(1024)
                            ->avatar()
                            ->helperText('Foto profil klien. Maks 1MB. Jika tidak diisi akan menggunakan inisial.')
                            ->deleteUploadedFileUsing(fn ($file) => Storage::disk('public')->delete($file)),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Isi Testimoni')
                    ->schema([
                        Forms\Components\Textarea::make('isi')
                            ->label('Teks Testimoni')
                            ->required()
                            ->rows(4)
                            ->maxLength(1000)
                            ->columnSpanFull()
                            ->placeholder('Contoh: "Pelayanan sangat memuaskan, psikolognya ramah dan profesional."'),

                        Forms\Components\Select::make('rating')
                            ->label('Penilaian Bintang')
                            ->options([
                                5 => '★★★★★ (Sangat Baik)',
                                4 => '★★★★ (Baik)',
                                3 => '★★★ (Cukup)',
                                2 => '★★ (Kurang)',
                                1 => '★ (Sangat Kurang)',
                            ])
                            ->default(5)
                            ->required(),
                    ]),

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
                    ->width(40)
                    ->height(40)
                    ->circular()
                    ->defaultImageUrl(fn (Testimoni $record) => 'https://ui-avatars.com/api/?name=' . urlencode($record->nama) . '&background=C8607A&color=fff'),

                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('jabatan')
                    ->label('Pekerjaan')
                    ->searchable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('institusi')
                    ->label('Institusi')
                    ->searchable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('rating')
                    ->label('Nilai')
                    ->badge()
                    ->color(fn (int $state): string => match (true) {
                        $state >= 4 => 'success',
                        $state === 3 => 'warning',
                        default => 'danger',
                    })
                    ->formatStateUsing(fn (int $state): string => str_repeat('★', $state)),

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
                    ->after(function (Testimoni $record) {
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
            'index'  => Pages\ListTestimonis::route('/'),
            'create' => Pages\CreateTestimoni::route('/create'),
            'edit'   => Pages\EditTestimoni::route('/{record}/edit'),
        ];
    }
}