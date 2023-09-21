<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use App\Filament\Resources\OrderResource\Pages\ListOrders;
use Filament\Widgets\Concerns\InteractsWithPageTable;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class OrderStats extends StatsOverviewWidget
{
    use InteractsWithPageTable;

    protected static ?string $pollingInterval = null;

    protected function getTablePage(): string
    {
        return ListOrders::class;
    }

    protected function getStats(): array
    {
        return [
            Stat::make(__('Total orders'), $this->getPageTableQuery()->count()),
            Stat::make(__('Confirmed Orders'), $this->getPageTableQuery()->where('status', 'confirmed')->count()),
            Stat::make(__('Cancelled Orders'), $this->getPageTableQuery()->where('status', 'cancelled')->count()),
        ];
    }
}
