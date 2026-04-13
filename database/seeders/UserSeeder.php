<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin SM FH Undip',
            'email' => 'bksap24cmswebsite@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 1,
        ]);
        User::create([
            'name' => 'Pimpinan Tinggi SMFH',
            'email' => 'senatmahasiswa.fhundip@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 3,
        ]);
        User::create([
            'name' => 'Komisi I SM FH Undip',
            'email' => 'komisisatu2026@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 4,
        ]);
        User::create([
            'name' => 'Komisi II SM FH Undip',
            'email' => 'komisi2smfhundip2026@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 5,
        ]);
        User::create([
            'name' => 'Komisi III SM FH Undip',
            'email' => 'komisi3smfhundip2026@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 6,
        ]);
        User::create([
            'name' => 'Komisi IV SM FH Undip',
            'email' => 'komisi4smfhundip2026@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 7,
        ]);
        User::create([
            'name' => 'Badan Anggaran',
            'email' => 'badananggaransmfhundip2026@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 8,
        ]);

        User::create([
            'name' => 'Badan Kehormatan',
            'email' => 'bksmfhundip26@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 9,
        ]);
        User::create([
            'name' => 'Badan Legislasi',
            'email' => 'badanlegislasismfhundip2026@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 10,
        ]);
        User::create([
            'name' => 'BKSAP',
            'email' => 'bksap.26@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 11,
        ]);
        User::create([
            'name' => 'BURT',
            'email' => 'burtsmfh24@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 12,
        ]);

        User::create([
            'name' => 'Badan Eksekutif Mahasiswa FH Undip Tahun 2026',
            'email' => 'bemfhundip2026@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        
        User::create([
            'name' => 'DIMCA UNDIP Tahun 2026',
            'email' => 'dimcaundip@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);

        User::create([
            'name' => 'Minat dan Bakat BEM FH',
            'email' => 'mikatbemfhundip2026@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        
        User::create([
            'name' => 'Karir dan Profesi BEM FH',
            'email' => 'kaprobemfhundip2026@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        
        User::create([
            'name' => 'Pemberdayaan Perempuan BEM FH',
            'email' => 'ppbemfhundip26@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        
        User::create([
            'name' => 'Hubungan antar Lembaga dan Masyarakat BEM FH Undip',
            'email' => 'halmasbemfhundip2026@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        
        User::create([
            'name' => 'Riset dan Keilmuan BEM FH Undip',
            'email' => 'riskelbemfhundip@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        
        User::create([
            'name' => 'Advokesma BEM FH Undip',
            'email' => 'advokesmabemfhundip2026@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        
        User::create([
            'name' => 'Ekonomi dan Kreatif BEM FH Undip',
            'email' => 'ekonomikreatifbemfhundip@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        
        User::create([
            'name' => 'Tim Penjamin Mutu Organisasi BEM FH Undip',
            'email' => 'inspektoratpenjaminmutubemfh@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        
        User::create([
            'name' => 'Pengembangan Sumber Daya Mahasiswa BEM FH Undip',
            'email' => 'psdmbemfhundip26@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        
        User::create([
            'name' => 'Hubungan Sosial dan Politik BEM FH Undip',
            'email' => 'hspbemfhundip@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        
        User::create([
            'name' => 'Kantor Media dan Informasi BEM FH Undip',
            'email' => 'kmibemfhundip2026@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        
        User::create([
            'name' => 'Pengabdian Masyarakat BEM FH Undip',
            'email' => 'dimasbemfhundip26@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        
        User::create([
            'name' => 'UKM-F Kelompok Riset dan Debat FH Undip Tahun 2026',
            'email' => 'krd.undip@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        
        User::create([
            'name' => 'UKM-F Pseudorechtspraak FH Undip Tahun 2026',
            'email' => 'pseudofhundip@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        
        User::create([
            'name' => 'UKM-F Asian Law Students Association Local Chapter Undip Tahun 2026',
            'email' => 'alsaundip@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        
        User::create([
            'name' => 'UKM-F Kelompok Studi Hukum Islam FH Undip Tahun 2026',
            'email' => 'pijarbestari2026@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        
        User::create([
            'name' => 'UKM-F Kelompok Studi Bahasa Asing FH Undip Tahun 2026',
            'email' => 'ksbafhundipofficial@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        
        User::create([
            'name' => 'UKM-F Paduan Suara Mahasiswa Satya Dharma Gita FH Undip Tahun 2026',
            'email' => 'sdg.choir2002@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        
        User::create([
            'name' => 'UKM-F Bola FH Undip Tahun 2026',
            'email' => 'bolafhundip@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        
        User::create([
            'name' => 'UKM-F Basket FH Undip Tahun 2026',
            'email' => 'basketfhundip.26@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        
        User::create([
            'name' => 'UKM-F Bela Diri FH Undip Tahun 2026',
            'email' => 'beladirifhundip@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        
        User::create([
            'name' => 'UKM-F Persekutuan Mahasiswa Kristen FH Undip Tahun 2026',
            'email' => 'fhpmkundip@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        
        User::create([
            'name' => 'UKM-F Pelayanan Rohani Mahasiswa Katolik FH Undip Tahun 2026',
            'email' => 'prmkfhundip26@gmail.com ',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        
        User::create([
            'name' => 'UKM-F Nebula Indonesia FH Undip Tahun 2026',
            'email' => 'nebulaindonesia.2026@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        
        User::create([
            'name' => 'UKM-F Teater Themis FH Undip Tahun 2026',
            'email' => 'kesekretariatanteaterthemis@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        
        User::create([
            'name' => 'UKM-F Koordinator Kegiatan Islam FH Undip Tahun 2026',
            'email' => 'kki.koordinator@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        
        User::create([
            'name' => 'UKM-F Kelompok Diskusi Kelas Sosial FH Undip Tahun 2026',
            'email' => ' officialkdksfhundip2026@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        
        User::create([
            'name' => 'UKM-F LPM Gema Keadilan FH Undip Tahun 2026',
            'email' => 'persmagemakeadilan@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
        User::create([
            'name' => 'Senat Mahasiswa FH Undip Tahun 2026 ',
            'email' => 'senatfhundip24@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
    
    }
}
