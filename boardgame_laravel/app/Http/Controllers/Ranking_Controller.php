use Illuminate\Http\Request;

use Validator;

use Illuminate\Support\Facades\DB;

class controller_test extends Controller
{


	//ランキング
   	public function ranking(){
   	
   		//$items = \App\Item::select('name')->get();
   		
   		
   		//商品テーブルの情報を販売個数の多い順にソートして表示
   		//Model版に修正の可能性あり
    	$items = DB::select('select item_id,item_name,item_price,sale_num from item_tbl ORDER BY sale_num DESC LIMIT 0, 10');
   	
   		//変数
   		$variable = ['rank' => 1,  //順位(初期値1)
   		 			'items' => $items
   		 			];
		return view('ranking',$variable);

	}



}