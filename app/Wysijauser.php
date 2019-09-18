<?php
/**
 * User: t-watanabe
 * Date: 2016/11/10
 * Time: 05:43
 * wp_wysija_userのデータベースモデル
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wysijauser extends Model
{
    /*** モデルと関連しているテーブル*/
    protected $table = 'wp_wysija_user';

    //*** 主キーの設定 ***/
    protected $primaryKey = 'user_id';

    /*** モデルのタイムスタンプを更新するかの指示    * TRUEの場合にUPDATE_ATやINSERT_ATを更新 */
    public $timestamps = false;

    public $fillable = [
        'email',
        'firstname',
        'lastname',
        'cf_3',
        'ip',
        'status',
    ];
}
