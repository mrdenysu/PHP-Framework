<?php

class ViewClass
{
  private $layout = 'default';

  final public function error(int $code = 404, string $text = 'error')
  {
    http_response_code($code);
    if ($this->render('error/' . $code, ['title' => $code, 'text' => $text])) { } else {
      exit($text);
    }
  }

  final public function json(array $data)
  {
    exit(json_encode($data));
  }

  public function render(string $page, array $data = [], bool $useTwig = false)
  {
    if ($useTwig) {
      # use twig
    } else {
      # php render
      extract($data);
      $layoutPath = 'layouts/' . $this->layout . '.php';
      $contentPath = 'layouts/' . $page . '.php';
      if (file_exists($layoutPath) and file_exists($contentPath)) {
        ob_start();
        require_once($contentPath);
        $content = ob_get_clean();
        require_once($layoutPath);
        return true;
      } else {
        return false;
      }
    }
  }

  public function getLayout()
  {
    return $this->layout;
  }

  public function setLayout(string $layout)
  {
    $this->layout = $layout;
    return $this;
  }
}
