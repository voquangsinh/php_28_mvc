<?php
class BaseController
{

  protected $layout = 'layouts.application';
  
  // Hàm hiển thị kết quả ra cho người dùng.
  public function render($file, $data = array())
  {
    $view_file = 'views/' . str_replace('.', '/', $file) . '.php';
    if (is_file($view_file)) {
      extract($data);
      ob_start();
      require_once($view_file);
      $content = ob_get_clean();
      ob_end_clean();

      $layout = 'views/' . str_replace('.', '/', $this->layout) . '.php';
      require_once($layout);
    } else {
      redirect('404');
    }
  }

  /**
   * Render page 404
   *
   * @return html
   */
  public function page404()
  {
    $this->render('pages.404');
  }
}