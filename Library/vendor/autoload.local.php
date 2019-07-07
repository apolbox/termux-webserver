<?php
/**
 * Kelas yang dugunakan untuk memanggil
 * file secara otomatis dengan memanggil nama kelas.
 *
 * @author Ayus Irfang Filaras
 * @since version v1.0
 * @license Apache-2.0
 */
class AutoloadLocal
{
    // Direktori vendor local
    private $basedir;
    
    /*
     * Fungsi utama untuk menyembuyikan error
     */
    public function __construct()
    {
        ini_set('display_errors', 0);
    }
    
    public function init($vendor)
    {
        $this->basedir = $vendor;
        return $this->loader();
    }
    
    private function loader()
    {
        spl_autoload_register(function($filename){
            $filename = strtolower($filename) . '.php';
            try
            {
                if (file_exists($this->basedir . '/' . $filename))
                {
                    require $this->basedir . '/' . $filename;
                }
                else
                {
                    throw new Exception("File $this->basedir/$filename tidak dapat ditemukan.");
                }
            }
            catch(Exception $e)
            {
                echo "<b>Pesan:</b> " . $e->getMessage();
            }
        });
    }
}
