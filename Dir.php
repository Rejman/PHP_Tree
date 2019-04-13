<?php


class Dir
{
    private $name;
    public $subDir;

    /**
     * Dir constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
        $this->subDir = array();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }
    public function addFolder(&$folder)
    {
        $name = $folder->getName();
        $path = $this->name . "\\" . $name;
        $folder->setName($path);
        $this->subDir[] = $folder;
    }

    public function getShortName()
    {
        $pos = strrpos($this->name, "\\");
        $short = substr($this->name, ++$pos);
        return $short;
    }

    public function getSubDirs()
    {
        return $this->subDir;
    }

    public function getLevel()
    {
        $level = substr_count($this->name,"\\");
        return $level;
    }

    public function showTree()
    {
        foreach ($this->subDir as $dir)
        {
            for($i=0;$i<$dir->getLevel();$i++)
            {
                echo '&nbsp'.'&nbsp'.'&nbsp'.'&nbsp';
            }
            echo $dir->getShortName()."<br>";
            $dir->showTree();
        }
    }
}