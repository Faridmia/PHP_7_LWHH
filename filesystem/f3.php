<?php 

    class Dir{

        
        private $files =[];

        private $directories =[];
        private $path;
        private $directoryObject =[];

        function __construct($path)
        {
            
            if(is_readable($path)){
                $this->path = $path;
                $entries = scandir($path);

                foreach($entries as $entry){
                    if("."!= $entry && ".."!=$entry){
                        if(is_dir($path.DIRECTORY_SEPARATOR.$entry)){
                            array_push($this->directories,$entry);
                        }else{
                            array_push($this->files,$entry);
                        }
                    }
                }
            }
        }

        function getDirectory($index){

            if(isset($this->directories[$index])){
                echo "set";
                if(!isset($this->directoryObject[$index])){
                    echo 'creating new object';
                    $this->directoryObject[$index] = new Dir($this->path.DIRECTORY_SEPARATOR.$this->directories[$index]);
                }else{
                    echo 'creating old object';
                }
                return $this->directoryObject[$index];
              
            }else{
                throw new Exception("Directory does not exit");
            }

            return false;
        }

        function getDirectories(){
            return $this->directories;
        }

        function getFiles(){
            return $this->files;
        }


    }

    $object = new Dir(getcwd());
    $directory = $object->getDirectories();
    $getFiles = $object->getFiles();
    print_r($directory);

    $oop = $object->getDirectory(3);

    print_r( $oop->getDirectories());

    $foundation = $oop->getDirectory(0);



    
    print_r($foundation->getFiles());
