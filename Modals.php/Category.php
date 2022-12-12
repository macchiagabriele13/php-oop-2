<?php



class Category
{
    public $category;
    private $icon;

    public function __construct(String $category)
    {
        $this->category = $category;
        $this->set_icon($category);
    }

    private function set_icon($category)
    {
        if ($category === 'Gatto') {
            $this->icon = 'https://www.bing.com/images/search?view=detailV2&ccid=dwKf0Gc%2b&id=45342D66353FE4AA97DCA6140CA63E8939270BF0&thid=OIP.dwKf0Gc-eX9XyPcSEfp-HwHaH6&mediaurl=https%3a%2f%2fthumbs.dreamstime.com%2fz%2ficona-semplice-di-vettore-del-gatto-illustrazione-bianco-e-nero-del-gatto-icona-lineare-della-testa-del-gatto-del-profilo-93723103.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.77029fd0673e797f57c8f71211fa7e1f%3frik%3d8AsnOYk%252bpgwUpg%26pid%3dImgRaw%26r%3d0&exph=1390&expw=1300&q=iconagatto&simid=608001738536013145&FORM=IRPRST&ck=C9E5A04DB786A4E1E466046DAF66EF15&selectedIndex=5&ajaxhist=0&ajaxserp=0';
        } else if ($category === 'Cane') {
            $this->icon = 'https://www.bing.com/images/search?view=detailV2&ccid=fwuYy78L&id=41B767731B7EA9779B6B0558AE88852965581F8A&thid=OIP.fwuYy78LxkFQcfye9z6pYwHaHa&mediaurl=https%3a%2f%2fstatic.vecteezy.com%2fsystem%2fresources%2fpreviews%2f000%2f567%2f006%2foriginal%2fvector-dog-icon.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.7f0b98cbbf0bc6415071fc9ef73ea963%3frik%3dih9YZSmFiK5YBQ%26pid%3dImgRaw%26r%3d0&exph=5000&expw=5000&q=icona+cane+&simid=608009057161651011&FORM=IRPRST&ck=4D502D57C5B537CF231B5B998A029BD9&selectedIndex=18&ajaxhist=0&ajaxserp=0';
        }
    }
}
