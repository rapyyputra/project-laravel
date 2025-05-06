// app/Models/Dosen.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dosen extends Model
{
    protected $table = 'dosen';
    protected $fillable = ['user_id', 'nidn', 'nama'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function jadwalKuliah(): HasMany
    {
        return $this->hasMany(JadwalKuliah::class, 'dosen_id');
    }

    public function nilai(): HasMany
    {
        return $this->hasMany(Nilai::class, 'dosen_id');
    }
}