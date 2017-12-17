<?php
class Article_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    //更新阅读量
    public function update_readNum($id){
        $sql = "update article set pv=pv+1 where id=$id";
        $this->db->query($sql);
        
    }
    //删除文章
    public function del_article($id){
       $this->db->where('id',$id);
       $this->db->delete('article');
    }
    //获取文章内容
    /*public function get_article_info($id){
        $this->db->where('id',$id);
        return $this->db->get('article')->row_array();
    }*/
    //更新文章
    public function update_article($update,$id){
        $this->db->where('id',$id);
        $this->db->update('article',$update);
    }
    //获取最新文章
    public function get_newestArticle_li($n){
      $sql = "select A.id,A.title from article A 
                        order by create_time desc limit 0,$n";
        return $this->db->query($sql)->result_array();        
    }
    //获取热门文章
    public function get_hotArticle_li($n){
       $sql = "select A.id,A.title from article A 
                        order by pv desc limit 0,$n";
        return $this->db->query($sql)->result_array();
    }
    //获取当前文章总数
    public function get_article_total($type_id = ''){
        if($type_id){
            $this->db->where('type',$type_id);
        }
        return $this->db->count_all('article');
        
    }

    //获取文章列表
    public function get_article_li($type_id = '',$p,$display_num){
        $type_id ? $where="WHERE A.type=$type_id" : $where='';
        $sql = "SELECT A.*,AT.type_name FROM article A
                    LEFT JOIN article_type AT on AT.id=A.type 
                    $where
                    ORDER BY A.create_time desc 
                    LIMIT $p,$display_num";
        return $this->db->query($sql)->result_array();
    }

    public function insert_article($insert){
    	$this->db->insert('article',$insert);
    }


    public function get_article_info($id){
    	$this->db->where('a.id',$id);
        $this->db->join('article_type at','at.id = a.type');  
    	return $this->db->get('article a')->row_array();
    }
    //获取文章类型列表
    public function get_articleType_li(){
        return  $this->db->get('article_type')->result_array();
    }
}
?>