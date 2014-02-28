<?php
/**
* The MIT License (MIT)
*
* Copyright (c) 2013 Sajjad Rad
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
* EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
* FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS
* OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN
* AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH
* THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*
* @package Invi
* @version 0.7 l4
* @author Sajjad Rad [sajjad.273@gmail.com]
* @license MIT License (3-clause)
* @copyright (c) 2014
* @link http://sajjadrad.com.com
*/

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Invitations extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::table('invitations', function($table) {
				$table->engine = 'InnoDB';
				$table->create();
				$table->increments('id')->unsigned();	
				$table->text('code', 255);
				$table->string('email');
				$table->date('expiration');
				$table->boolean('active');
				$table->boolean('used')->default(False);
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('invitations', function($table) {
			$table->drop();
		});
	}

}
