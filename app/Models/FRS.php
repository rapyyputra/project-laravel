// app/Models/FRS.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FRS extends Model
{
    protected $table = 'frs';
    protected $fillable = ['mahasiswa_id', 'mata_kuliah_id', 'tahun_akademik', 'semester', 'status_persetujuan'];

    public function mahasiswa(): BelongsTo
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id');
    }

    public function mataKuliah(): BelongsTo
    {
        return $this->belongsTo(MataKuliah::class, 'mata_kuliah_id');
    }
}