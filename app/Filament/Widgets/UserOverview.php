<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UserOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Badung', User::query()->where('district_id', 1)->count()),
            Stat::make('Bangli', User::query()->where('district_id', 2)->count()),
            Stat::make('Buleleng', User::query()->where('district_id', 3)->count()),
            Stat::make('Gianyar', User::query()->where('district_id', 4)->count()),
            Stat::make('Jembrana', User::query()->where('district_id', 5)->count()),
            Stat::make('Karangasem', User::query()->where('district_id', 6)->count()),
            Stat::make('Klungkung', User::query()->where('district_id', 7)->count()),
            Stat::make('Tabanan', User::query()->where('district_id', 8)->count()),
            Stat::make('Denpasar', User::query()->where('district_id', 9)->count()),
        ];
    }
}
