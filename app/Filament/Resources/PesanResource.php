<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PesanResource\Pages;
use App\Models\Pesan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Notifications\Notification;

class PesanResource extends Resource
{
    protected static ?string $model = Pesan::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox';

    protected static ?string $navigationLabel = 'Pesan Masuk';

    protected static ?string $navigationGroup = 'Komunikasi';

    protected static ?int $navigationSort = 1;

    protected static ?string $modelLabel = 'Pesan';

    protected static ?string $pluralModelLabel = 'Pesan Masuk';

    /**
     * Tampilkan jumlah pesan baru di menu sidebar
     */
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('status', 'baru')->count() ?: null;
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'danger';
    }

    /**
     * Pesan hanya bisa dilihat (tidak bisa dibuat/diedit dari admin)
     */
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Data Pengirim')
                    ->schema([
                        Forms\Components\TextInput::make('nama')
                            ->label('Nama Pengirim')
                            ->disabled(),

                        Forms\Components\TextInput::make('email')
                            ->label('Email')
                            ->disabled(),

                        Forms\Components\TextInput::make('telepon')
                            ->label('No. Telepon')
                            ->disabled(),

                        Forms\Components\Select::make('status')
                            ->label('Status Pesan')
                            ->options([
                                'baru'    => 'Baru (belum dibaca)',
                                'dibaca'  => 'Sudah Dibaca',
                                'dibalas' => 'Sudah Dibalas',
                            ]),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Isi Pesan')
                    ->schema([
                        Forms\Components\TextInput::make('subjek')
                            ->label('Subjek / Perihal')
                            ->disabled()
                            ->columnSpanFull(),

                        Forms\Components\Textarea::make('pesan')
                            ->label('Isi Pesan')
                            ->disabled()
                            ->rows(6)
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Info Tambahan')
                    ->schema([
                        Forms\Components\TextInput::make('ip_address')
                            ->label('IP Address')
                            ->disabled()
                            ->helperText('Alamat IP pengirim.'),

                        Forms\Components\TextInput::make('created_at')
                            ->label('Diterima Pada')
                            ->disabled()
                            ->formatStateUsing(fn ($state) => $state ? \Carbon\Carbon::parse($state)->translatedFormat('d F Y, H:i') : '-'),
                    ])
                    ->columns(2)
                    ->collapsed(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->copyable(),

                Tables\Columns\TextColumn::make('telepon')
                    ->label('Telepon')
                    ->searchable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('subjek')
                    ->label('Subjek')
                    ->limit(40)
                    ->searchable(),

                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'baru'    => 'Baru',
                        'dibaca'  => 'Dibaca',
                        'dibalas' => 'Dibalas',
                    })
                    ->color(fn (string $state): string => match ($state) {
                        'baru'    => 'danger',
                        'dibaca'  => 'warning',
                        'dibalas' => 'success',
                    }),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Diterima')
                    ->dateTime('d M Y, H:i')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        'baru'    => 'Baru',
                        'dibaca'  => 'Dibaca',
                        'dibalas' => 'Dibalas',
                    ]),
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->label('Lihat Detail')
                    ->after(function (Pesan $record) {
                        if ($record->status === 'baru') {
                            $record->markAsDibaca();
                        }
                    }),

                Tables\Actions\Action::make('balas')
                    ->label('Balas via Email')
                    ->icon('heroicon-o-envelope')
                    ->color('success')
                    ->url(fn (Pesan $record) => 'mailto:' . $record->email . '?subject=Re: ' . urlencode($record->subjek ?? 'Pesan dari Website'))
                    ->openUrlInNewTab()
                    ->after(function (Pesan $record) {
                        $record->update(['status' => 'dibalas']);
                    }),

                Tables\Actions\DeleteAction::make()
                    ->label('Hapus'),
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
            'index' => Pages\ListPesans::route('/'),
            'view'  => Pages\ViewPesan::route('/{record}'),
        ];
    }

    /**
     * Pesan tidak bisa dibuat manual dari admin (hanya dari form kontak website)
     */
    public static function canCreate(): bool
    {
        return false;
    }
}