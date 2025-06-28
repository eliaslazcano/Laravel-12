<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
  use HasFactory;

  protected $table = 'job_listings'; //Tabela da base de dados para o Eloquent usar de referencia
  protected $fillable = ['title', 'salary']; //Colunas que podem receber INSERT em massa (segurança)

  # Para inserir (INSERT INTO)
  # Job::create(['title' => 'Programador', 'salary' => 'R$ 80.000']);
  # PS: Apenas colunas que forem mencionadas na propriedade `$fillable`.

  # Para buscar tudo (SELECT sem WHERE)
  # Job::all();
  # PS: Linhas resultantes virão em array, as colunas são acessíveis por chave de array e ao mesmo como objeto,
  # por exemplo `$item['coluna']` e `$item->coluna`.

  # Para buscar pela chave primaria (SELECT com WHERE na PRIMARY KEY)
  # Job::find(1);
  # PS: As colunas são acessíveis por chave de array e ao mesmo como objeto, ex: `$item['coluna']` e `$item->coluna`.

  # Para deletar um item
  # $item->delete()
  # PS: Este item é resultado de uma consulta.

  # A chave estrangeira `employer_id` possibilita existência de:
  # Acessar `$item->employer`, que retorna o mesmo que consultar diretamente `Employer::find(1)`
  public function employer()
  {
    return $this->belongsTo(Employer::class, 'employer_id');
  }
}
