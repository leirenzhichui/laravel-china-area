<?php

namespace Ydjharris\Area\Commands;

use Ydjharris\Area\Models\ProvinceCityArea as PCAModel;
use Illuminate\Console\Command;

class ClearData extends Command
{
    protected $signature = 'area:clearData';
    protected $description = '清空area表中省市县数据';

    public function handle()
    {
        $this->line('开始清空数据');
        PCAModel::query()->truncate();
        $this->info('数据已清空');
    }
}
