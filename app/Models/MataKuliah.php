// app/Models/MataKuliah.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MataKuliah extends Model
{
    protected $table = 'mata_kuliah';
    protected $fillable = ['kode_mk', 'nama_mk', 'sks', 'semester', 'program_studi_id'];

    public function programStudi(): BelongsTo
    {
        return $this->belongsTo(ProgramStudi::class, 'program_studi_id');
    }

    public function jadwalKuliah(): HasMany
    {
        return $this->hasMany(JadwalKuliah::class, 'mata_kuliah_id');
    }

    public function frs(): HasMany
    {
        return $this->hasMany(FRS::class, 'mata_kuliah_id');
    }

    public function nilai(): HasMany
    {
        return $this->hasMany(Nilai::class, 'mata_kuliah_id');
    }
}