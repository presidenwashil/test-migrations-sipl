<?php

use App\Models\Jadwal;
use App\Models\Kelompok;
use Illuminate\Support\Facades\Request;
use Livewire\Volt\Component;

new class extends Component {
        
    public $kelompokId;

    public function mount(): void
    {
        $this->kelompokId = Request::input('kelompok_id');
    }
        
}; ?>

<div>
    @dump($kelompokId)
</div>
