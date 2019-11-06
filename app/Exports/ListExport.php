<?php
namespace App\Exports;

use App\NewsletterSubscription;
use Maatwebsite\Excel\Concerns\FromCollection;

class ListExport implements FromCollection
{
    protected $type;
    public function __construct( $type)
    {
        $this->type = $type; 
    }

    public function collection()
    {
        return NewsletterSubscription::where('type', $this->type)->get();
    }
}