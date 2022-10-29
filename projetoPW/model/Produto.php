<?php   
    class Produto{
        private $codProduto, $nomeProduto, $precoProduto, $descricaoProduto, $quantidadeProduto, $categoria, $imgProduto;

        public function construct_min($nomeProduto, $precoProduto, $descricaoProduto, $quantidadeProduto, $categoria, $imgProduto){
            $this->nomeProduto = $nomeProduto;
            $this->precoProduto = $precoProduto;
            $this->descricaoProduto = $descricaoProduto;
            $this->quantidadeProduto = $quantidadeProduto;
            $this->categoria = $categoria;
            $this->imgProduto = $imgProduto;
        }

        public function construct_full($codProduto, $nomeProduto, $precoProduto, $descricaoProduto, $quantidadeProduto, $categoria, $imgProduto){
            $this->codProduto = $codProduto;
            $this->construct_min($nomeProduto, $precoProduto, $descricaoProduto, $quantidadeProduto, $categoria, $imgProduto);
        }

        public function setCodProduto($codProduto){$this->codProduto = $codProduto;}
        public function getCodProduto(){return $this->codProduto;}

        public function setNomeProduto($nomeProduto){$this->nomeProduto = $nomeProduto;}
        public function getNomeProduto(){return $this->nomeProduto;}

        public function setPrecoProduto($precoProduto){$this->precoProduto = $precoProduto;}
        public function getPrecoProduto(){return $this->precoProduto;}

        public function setDescricaoProduto($descricaoProduto){$this->descricaoProduto = $descricaoProduto;}
        public function getDescricaoProduto(){return $this->descricaoProduto;}

        public function setQuantidadeProduto($quantidadeProduto){$this->quantidadeProduto = $quantidadeProduto;}
        public function getQuantidadeProduto(){return $this->quantidadeProduto;}
        
        // categoria -> Categoria OBJ
        public function setCategoria($categoria){$this->categoria = $categoria;}
        public function getCategoria() : Categoria {return $this->categoria;}

        public function setImgProduto($imgProduto){$this->imgProduto = $imgProduto;}
        public function getImgProduto(){return $this->imgProduto;}
    }
?>
