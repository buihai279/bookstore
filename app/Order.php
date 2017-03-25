<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    protected $table ='orders';

    public $timestamps = true;
    public static function  getAllOrder()
    {
    	return  DB::select("SELECT o.id as orderId,
                                    sum(od.quality) as 'totalBook',
                                    o.nameReceiver,
                                    o.phoneReceiver,
                                    o.order_status,
                                    o.shipping_address,
                                    p.payment_status,
                                    p.payment_type,
                                    p.amount
                            FROM orders as o
                            LEFT OUTER JOIN order_details  as od
                            ON od.order_id=o.id
                            LEFT OUTER JOIN books  as b
                            ON od.book_id=b.id
                            LEFT OUTER JOIN sales  as s
                            ON o.sale_id=s.id
                            LEFT OUTER JOIN users  as u
                            ON o.user_id=u.id
                            LEFT OUTER JOIN payments  as p
                            ON o.payment_id=p.id
                            GROUP BY o.id,
                                    o.nameReceiver,
                                    o.phoneReceiver,
                                    o.order_status,
                                    o.shipping_address,
                                    p.payment_status,
                                    p.payment_type,
                                    p.amount
                        "
                    );
    }
}
