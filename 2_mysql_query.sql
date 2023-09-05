SELECT tb_mahasiswa.mhs_nama FROM tb_mahasiswa 
INNER JOIN tb_mahasiswa_nilai ON tb_mahasiswa_nilai.mhs_id = tb_mahasiswa.mhs_id 
INNER JOIN tb_matakuliah ON tb_matakuliah.mk_id = tb_mahasiswa_nilai.mk_id 
ORDER BY tb_mahasiswa_nilai.nilai 
DESC LIMIT 1;