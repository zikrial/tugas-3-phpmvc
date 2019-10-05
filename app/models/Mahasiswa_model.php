<?php

class Mahasiswa_model {
    private $mhs = [
        [
            "nama" => "M. Zikri Alhaq",
            "nrp" => "173040027",
            "email" => "zikrialhaq@mail.unpas.ac.id",
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Yogi Nugraha",
            "nrp" => "173040001",
            "email" => "yoginugraha43@mail.unpas.ac.id",
            "jurusan" => "Teknik Mesin"
        ],
        [
            "nama" => "Muhammad Fahdy",
            "nrp" => "173040030",
            "email" => "fahdy.173040030@mail.unpas.ac.id",
            "jurusan" => "Teknik Lingkungan"
        ],
        [
            "nama" => "Muhammad Ichlasul A",
            "nrp" => "173040022",
            "email" => "m.ichal7749@mail.unpas.ac.id",
            "jurusan" => "Teknik Pangan"
        ],
        [
            "nama" => "Rafly Yunandi A",
            "nrp" => "173040027",
            "email" => "raflyyunandia@mail.unpas.ac.id",
            "jurusan" => "Teknik Perancangan Wilayah Kota"
        ]
    ];

    public function getAllMahasiswa()
    {
        return $this->mhs;
    }
}