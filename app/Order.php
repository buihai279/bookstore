<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    protected $table ='orders';

    static $limit =12;

    public $timestamps = true;

    public static function  getAllOrder()
    {
        return  DB::select("SELECT o.id as orderId,
                                    sum(od.quality) as 'totalBook',
                                    o.nameReceiver,
                                    o.phoneReceiver,
                                    o.order_status,
                                    o.shipping_fee,
                                    o.shipping_address,
                                    p.payment_status,
                                    p.payment_type,
                                    o.created_at as orderCreatedAt,
                                    p.amount
                            FROM orders as o
                            LEFT OUTER JOIN order_details  as od
                            ON od.order_id=o.id
                            LEFT OUTER JOIN books  as b
                            ON od.book_id=b.id
                            LEFT OUTER JOIN users  as u
                            ON o.user_id=u.id
                            LEFT OUTER JOIN payments  as p
                            ON o.payment_id=p.id
                            GROUP BY o.id,
                                    o.nameReceiver,
                                    o.phoneReceiver,
                                    o.order_status,
                                    o.shipping_address,
                                    o.shipping_fee,
                                    p.payment_status,
                                    p.payment_type,
                                    o.created_at,
                                    p.amount
                            ORDER BY o.created_at DESC
                        "
                    );
    }
    
    public static function  getAllOrderByUserId($id=1)
    {
        $page=Input::get('page',1);
        $offset=($page-1)*self::$limit;
        return  DB::select("SELECT o.id as orderId,
                                    sum(od.quality) as 'totalBook',
                                    o.nameReceiver,
                                    o.phoneReceiver,
                                    o.order_status as orderStatus,
                                    o.shipping_address,
                                    p.payment_status as paymentStatus,
                                    p.payment_type,
                                    p.amount as orderAmount,
                                    o.created_at as orderCreatedAt,
                                    o.shipping_fee
                            FROM orders as o
                            LEFT OUTER JOIN order_details  as od
                            ON od.order_id=o.id
                            LEFT OUTER JOIN books  as b
                            ON od.book_id=b.id
                            LEFT OUTER JOIN users  as u
                            ON o.user_id=u.id
                            LEFT OUTER JOIN payments  as p
                            ON o.payment_id=p.id
                            WHERE u.id =$id
                            GROUP BY o.id,
                                    o.nameReceiver,
                                    o.phoneReceiver,
                                    o.order_status,
                                    o.shipping_address,
                                    p.payment_status,
                                    p.payment_type,
                                    p.amount,
                                    o.created_at,
                                    o.shipping_fee
                            ORDER BY o.created_at DESC
                            LIMIT $offset, 12
                        "
                    );
    }
    public static function  getTotalOrderByUserId($id=1)
    {
        return  count(DB::select("SELECT o.id
                            FROM orders as o
                            LEFT OUTER JOIN users  as u
                            ON o.user_id=u.id
                            WHERE u.id =$id
                        "
                    ));
    }

    public static function  getAllOrderByOrderId($orderIds=array())
    {
        $str=implode(',', $orderIds);
        return  DB::select("SELECT o.id as orderId,
                                    sum(od.quality) as 'totalBook',
                                    o.nameReceiver,
                                    o.phoneReceiver,
                                    o.order_status,
                                    o.shipping_fee,
                                    o.created_at as orderCreatedAt,
                                    o.shipping_address,
                                    p.payment_status,
                                    p.payment_type,
                                    p.amount
                            FROM orders as o
                            LEFT OUTER JOIN order_details  as od
                            ON od.order_id=o.id
                            LEFT OUTER JOIN books  as b
                            ON od.book_id=b.id
                            LEFT OUTER JOIN users  as u
                            ON o.user_id=u.id
                            LEFT OUTER JOIN payments  as p
                            ON o.payment_id=p.id
                            WHERE o.id IN ($str) 
                            GROUP BY o.id,
                                    o.nameReceiver,
                                    o.phoneReceiver,
                                    o.order_status,
                                    o.shipping_fee,
                                    o.shipping_address,
                                    p.payment_status,
                                    o.created_at,
                                    p.payment_type,
                                    p.amount
                            ORDER BY o.created_at DESC
                        "
                    );
    }
}
