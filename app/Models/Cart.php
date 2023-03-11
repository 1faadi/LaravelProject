<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public $items=null;
    public $totalprice=null;
    public $totalQty=null;

        public function __construct($oldCart){
            if ($oldCart){
                $this->items=$oldCart->items;
                $this->totalprice=$oldCart->totalprice;
                $this->totalQty=$oldCart->totalQty;
            }
        }
    public function add($item,$id){
        $storeItem = ['qty' => 0 , 'price' => $item->price, 'item'=>$item];
        if ($this->items){
            if (array_key_exists($id,$this->items)){
                $storeItem = $this->items[$id];
            }
        }
        $storeItem['qty']++;
        $storeItem['price']= $item->price * $storeItem['qty'];
        $this->items[$id] = $storeItem;
        $this->totalQty++;
        $this->totalprice +=$item->price;
    }
        public function increase($id){
            $this->items[$id]['qty']++;
            $this->items[$id]['price'] -= $this->items[$id]['item']['price'];
            $this->totalQty++;
            $this->totalprice += $this->items[$id]['item']['price'];
            if ($this->items[$id]['qty'] <= 0 ){
                unset($this->items[$id]);
            }
        }

    public function decrease($id){
        $this->items[$id]['qty']--;
        $this->items[$id]['price'] -= $this->items[$id]['item']['price'];
        $this->totalQty--;
        $this->totalprice -= $this->items[$id]['item']['price'];
        if ($this->items[$id]['qty'] <= 0 ){
            unset($this->items[$id]);
        }
    }


}
