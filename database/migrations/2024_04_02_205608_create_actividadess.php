<?php 
use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//Generated By PlantUML Command
class CreateActividadess extends Migration{
	public function up(){ 
 		Schema::create('actividadess', function (Blueprint $table) { 
			$table->bigIncrements('id');
			$table->int('id');
			$table->string('horario');
			$table->timestamps();
		});
 	} 
	public function down(){
 
	} 
}