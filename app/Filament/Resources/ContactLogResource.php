<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactLogResource\Pages;
use App\Filament\Resources\ContactLogResource\RelationManagers;
use App\Models\ContactLog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactLogResource extends Resource
{
    protected static ?string $model = ContactLog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')->label('Nama')->disabled(),
                Forms\Components\TextInput::make('email')->label('Email')->disabled(),
                Forms\Components\TextInput::make('alamat')->label('Alamat')->disabled(),
                Forms\Components\TextInput::make('provinsi')->label('Provinsi')->disabled(),
                Forms\Components\TextInput::make('kota')->label('Kota')->disabled(),
                Forms\Components\TextInput::make('kecamatan')->label('Kecamatan')->disabled(),
                Forms\Components\TextInput::make('kelurahan')->label('Kelurahan')->disabled(),
                Forms\Components\TextInput::make('kode_pos')->label('Kode Pos')->disabled(),
                Forms\Components\TextInput::make('rt')->label('RT')->disabled(),
                Forms\Components\TextInput::make('rw')->label('RW')->disabled(),
                Forms\Components\Textarea::make('pesan')->label('Pesan')->disabled(),
                Forms\Components\TextInput::make('status')->label('Status')->disabled(),
                Forms\Components\Textarea::make('error_message')->label('Error Message')->disabled(),
                Forms\Components\TextInput::make('created_at')->label('Waktu')->disabled(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->label('Nama')->searchable(),
                Tables\Columns\TextColumn::make('email')->label('Email')->searchable(),
                Tables\Columns\TextColumn::make('status')->label('Status')->badge()->color(fn($record) => $record->status === 'sukses' ? 'success' : 'danger'),
                Tables\Columns\TextColumn::make('created_at')->label('Waktu')->dateTime()->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContactLogs::route('/'),
            'view' => Pages\ViewContactLog::route('/{record}'),
        ];
    }
}
