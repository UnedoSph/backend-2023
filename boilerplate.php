<?php

# membuat class Animal
class Animal
{
    # property animals
    private $data;
    # method constructor - mengisi data awal
    # parameter: data hewan (array)
    public function __construct($data)
    {
        $this->data = $data;
    }

    # method index - menampilkan data animals
    public function index()
    {
        echo "Nama: " . $this->data['nama'] . "<br>";
        echo "Jenis: " . $this->data['jenis'] . "<br>";
        echo "Habitat: " . $this->data['habitat'] . "<br>";
    }

    // Data awal hewan dalam bentuk array

    # gunakan foreach untuk menampilkan data animals (array)

    # method store - menambahkan hewan baru
    # parameter: hewan baru
    public function store($data)
    {
        $newAnimal = array(
            'nama' => $data['nama'],
            'jenis' => $data, ['jenis'],
            'habitat' => $data, ['habitat']
        );
        // Tambahkan data baru ke dalam objek
        $this->data[] = $newAnimal;

        echo "Hewan Baru Ditambahkan:<br>";
        $this->index();
        // Tampilkan data setelah penambahan
    }

    # method update - mengupdate hewan
    # parameter: index dan hewan baru
    public function update($index, $data)
    {
        foreach ($this->data as &$animal) {
            if ($animal['nama'] === $data['nama']) {
                // Melakukan pembaruan pada data hewan yang sesuai
                $animal = array_merge($animal, $data);
                break;
                // Berhenti setelah menemukan dan memperbarui data
            }
        }

        // Menampilkan data hewan setelah pembaruan
        echo "Data Hewan Setelah Pembaruan:<br>";
        $this->index();
    }

    # method delete - menghapus hewan
    # parameter: index
    public function destroy($index)
    {
        # gunakan method unset atau array_splice untuk menghapus data array
        unset($this->data[$index]);
        echo "Data Hewan Setelah Penghapusan:<br>";
        $this->index();
    }
}


# membuat object
# kirimkan data hewan (array) ke constructor
$animal = new Animal([$animalsData]);

echo "Index - Menampilkan seluruh hewan <br>";
$animal->index();
echo "<br>";

echo "Store - Menambahkan hewan baru <br>";
$animal->store(array('nama' => 'Burung', 'jenis' => 'Herbivora', 'habitat' => 'Udara'));
$animal->index();
echo "<br>";

echo "Update - Mengupdate hewan <br>";
$animal->update(0, array('nama' => 'Kucing Anggora', 'jenis' => 'Karnivora', 'habitat' => 'Rumah'));
$animal->index();
echo "<br>";

echo "Destroy - Menghapus hewan <br>";
$animal->destroy(1);
$animal->index();
echo "<br>";
