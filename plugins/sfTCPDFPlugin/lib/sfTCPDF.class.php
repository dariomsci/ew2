<?php

/**
 * sfTCPDF class.
 *
 * @package    sfTCPDFPlugin
 * @author     Vernet Loïc aka COil <qrf_coil]at[yahoo[dot]fr>
 * @link       http://www.symfony-project.org/plugins/sfTCPDFPlugin
 * @link       http://www.tcpdf.org
 * @link       http://sourceforge.net/projects/tcpdf/
 */

class sfTCPDF extends TCPDF
{
  /**
   * When set this method is called as a header function.
   * The variable must be a valid argument to call_user_func
   *
   * @var mixed
   */
  public $headerCallback = null;

  /**
   * When set this method is called as a header function.
   * The variable must be a valid argument to call_user_func
   *
   * @var mixed
   */
  public $footerCallback = null;

  /**
   * Holds the data set via php magic methods
   */
  protected $userData = array();

  /**
   * Instantiate TCPDF lib.
   *
   * @param string $orientation
   * @param string $unit
   * @param string $format
   * @param boolean $unicode
   * @param string $encoding
   */
  public function __construct($orientation = 'P', $unit = 'mm', $format = 'A4', $unicode = true, $encoding = "UTF-8")
  {
    parent::__construct($orientation, $unit, $format, $unicode, $encoding);
  }

  /**
   * This method is used to render the page header.
   * It is automatically called by AddPage() and could be overwritten using a Callback.
   *
   * @access public
   * @see $headerCallback
   */
  public function Header()
  {
/*    if ($this->print_header)
    {
      if (is_null($this->headerCallback))
      {
        parent::Header();
      }
      else
      {
        call_user_func($this->headerCallback, $this);
      }
    }
*/
		$empresa = sfConfig::get('app_empresa');
		
		// Logo
		$image_file = K_PATH_IMAGES.'logo_gepsa.jpg';
				
		$this->Image($image_file, 15, 12, 28, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
		// Set font
		$this->SetFont('helvetica', 'B', 10);
		// Title
		$this->SetY(18);
		$this->SetX(22);
		
		$this->SetTextColor(184, 183, 183);
		
		$this->Cell(0, 5, '', 0, false, 'L', 0, '', 0, false, 'M', 'M');
		
		$this->SetTextColor(5, 5, 5);
		$this->SetFont('helvetica', 'N', 10);
		$this->Cell(0, 5, $empresa, 0, false, 'R', 0, '', 0, false, 'M', 'M');
		
		$this->ln();
		
		$this->Cell(0, 0, '', 'T', 1, 'L');
		//$this->Line(15, 23, 285, 23);  	
  }

  /**
   * This method is used to render the page footer.
   * It is automatically called by AddPage() and could be overwritten using a Callback.
   *
   * @access public
   * @see $footerCallback
   */
  public function Footer()
  {
    /*if ($this->print_footer)
    {
      if (is_null($this->footerCallback))
      {
        parent::Footer();
      }
      else
      {
        call_user_func($this->footerCallback, $this);
      }
    }*/
		$this->SetY(-17);
		
		$this->SetFont('helvetica', 'N', 6);
		$this->SetTextColor(135, 135, 135);
		$this->Cell(0, 5, 'Los precios no incluyen impuestos ni costo de flete. GRUPO PILAR S.A. se reserva el derecho de modificar los precios, descuentos y condiciones comerciales sin previo aviso.', 'T', 1, 'C');
		//$this->ln();
		
		$this->SetFont('helvetica', 'N', 6);
		$this->SetTextColor(175, 175, 175);
		$this->Cell(50, 10, 'Desarrollado por MASTER SOLUTIONS S.A.', '', 0, 'L');
		
		$this->SetTextColor(0);
		$this->SetFont('helvetica', 'I', 8);
		// Page number
		$this->Cell(0, 10, 'Pag. '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'R', 0, '', 0, false, 'T', 'M');  	
  }

  /**
   * Magic setter.
   *
   * @param String $name
   * @param mixed $value
   */
  public function __set($name, $value)
  {
    $this->userData[$name] = $value;
  }

  /**
   * Magic getter.
   *
   * @param String $name Name of data key to return
   * @return mixed
   */
  public function __get($name)
  {
    if (array_key_exists($name, $this->userData))
    {
      return $this->userData[$name];
    }

    $trace = debug_backtrace();    
    trigger_error(
      'Undefined property call via __get(): '. $name. ' in ' . $trace[0]['file']. ' on line ' . $trace[0]['line'],
      E_USER_NOTICE
    );
    
    return null;
  }

  /**
   * Test existence of user data.
   *
   * @param String $name
   * @return Boolean
   */
  public function __isset($name)
  {
    return isset($this->userData[$name]);
  }

  /**
   * Unset user data.
   *
   * @param String $name
   */
  public function __unset($name)
  {
    unset($this->userData[$name]);
  } 
}


class MysfTCPDF extends TCPDF {
	//Page header
	public function Header() {
		$empresa = sfConfig::get('app_empresa');
		
		// Logo
		$image_file = K_PATH_IMAGES.'logo_gepsa.jpg';
				
		$this->Image($image_file, 15, 12, 28, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
		// Set font
		$this->SetFont('helvetica', 'B', 10);
		// Title
		$this->SetY(18);
		$this->SetX(22);
		
		$this->SetTextColor(184, 183, 183);
		
		$this->Cell(0, 5, '', 0, false, 'L', 0, '', 0, false, 'M', 'M');
		
		$this->SetTextColor(5, 5, 5);
		$this->SetFont('helvetica', 'N', 10);
		$this->Cell(0, 5, $empresa, 0, false, 'R', 0, '', 0, false, 'M', 'M');
		
		$this->ln();
		
		$this->Cell(0, 0, '', 'T', 1, 'L');
		//$this->Line(15, 23, 285, 23);
		
	}

	// Page footer
	public function Footer() {
		// Position at 15 mm from bottom
		$this->SetY(-15);
				
		$this->SetFont('helvetica', 'N', 6);
		$this->SetTextColor(175, 175, 175);
		$this->Cell(50, 10, 'Desarrollado por MASTER SOLUTIONS S.A.', '', 0, 'L');
		
		$this->SetTextColor(0);
		$this->SetFont('helvetica', 'I', 8);
		// Page number
		$this->Cell(0, 10, 'Pag. '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'R', 0, '', 0, false, 'T', 'M');
	}
}