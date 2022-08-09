<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class PaketHosting extends Component
{

    public $packages;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //in real world applicatio, $json_data got by qerying the database. The structure of this data needs to arrange, so the data displayed in the frontend can be dynamics. For htmlentities, we can using tinymce or CKEditor.

        $json_data = '[{"title":"Bayi","price":19900,"discounted_price":14900,"registered_user":938,"features":["<b>0.5X RESOURCE POWER<\/b>","<b>500 MB<\/b> Disk Space","<b>Unlimited<\/b> Bandwidth","<b>Unlimited<\/b> Databases","<b>1<\/b> Domain","<b>Instant<\/b> Backup","<b>Unlimited SSL<\/b> Gratis Selamanya"],"buttonTitle":"Pilih Sekarang","higlight":false},{"title":"Pelajar","price":46900,"discounted_price":23450,"registered_user":4168,"features":["<b>1X RESOURCE POWER<\/b>","<b>Unlimited<\/b> Disk Space","<b>Unlimited<\/b> Bandwidth","<b>Unlimited<\/b> POP3 Email","<b>Unlimited<\/b> Databases","<b>10<\/b> Addon Domain","<b>Instant<\/b> Backup","<b>Domain Gratis<\/b> Selamanya","<b>Unlimited SSL<\/b> Gratis Selamanya"],"buttonTitle":"Pilih Sekarang","higlight":false},{"title":"Personal","price":58900,"discounted_price":38900,"registered_user":10017,"features":["<b>2X RESOURCE POWER<\/b>","<b>Unlimited<\/b> Disk Space","<b>Unlimited<\/b> Bandwidth","<b>Unlimited<\/b> POP3 Email","<b>Unlimited<\/b> Databases","<b>10<\/b> Addon Domain","<b>Instant<\/b> Backup","<b>Domain Gratis<\/b> Selamanya","<b>Unlimited SSL<\/b> Gratis Selamanya","<b>Private<\/b> Name Server","<b>SpamAssasin<\/b> Mail Protection"],"buttonTitle":"Pilih Sekarang","higlight":true},{"title":"Bisnis","price":109900,"discounted_price":65900,"registered_user":3552,"features":["<b>3X RESOURCE POWER<\/b>","<b>Unlimited<\/b> Disk Space","<b>Unlimited<\/b> Bandwidth","<b>Unlimited<\/b> POP3 Email","<b>Unlimited<\/b> Databases","<b>Unlimited<\/b> Addon Domain","<b>Instant<\/b> Backup & Restore","<b>Domain Gratis<\/b> Selamanya","<b>Unlimited SSL<\/b> Gratis Selamanya","<b>Private<\/b> Name Server","<b>Prioritas<\/b> Layanan Support","*****"],"buttonTitle":"Diskon 40%","higlight":false}]';

        $this->packages = json_decode($json_data);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.paket-hosting');
    }
}
