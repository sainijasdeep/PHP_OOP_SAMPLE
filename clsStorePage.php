<?php
  /** Page 1
	 * This class in only for inheritance, it will generate the structure of the web site. This class will
	 * help us make changes into all the pages in a really easy way. The class that inherits this, MUST contain a compilePage function.
	 * 
	 * This class has a compile function that calls the compilePage function of the class which inherited this one.
	 * 
	 */
	Class clsStorePage {
	
		public $sTitle;		
		public $sRelPath;
		
		/**
		 * Constructor of the main class.
		 * 
		 * @param $newRelPath[optional] {String} This is the relative path from the page to the application directory.
		 */
		public function __construct( $newRelPath="" ) {
			$this->sTitle = "";
			$this->sRelPath = $newRelPath;
			
			
		}
		
		/**
		 * Gets the Title of the Page.
		 * 
		 * @return {String} The title.
		 */
		public function getTitle() { return $this->sTitle; }

		/**
		 * Sets the Title of the Page. Will only work if set up before calling compile()
		 * 
		 * @param $newTitle {String} The new title.
		 */
		public function setTitle( $newTitle ) { $this->sTitle = $newTitle; }
		
		
		
		/**
		 * Sets a RelPath. Will only work if set up before calling compile()
		 * 
		 * @param $newPath {String} The new relative path.
		 */
		public function setRelPath( $newPath ) { $this->sRelPath = $newPath; }
		
		/**
		 * Gets the relative path.
		 * 
		 * @return {String} The relative path.
		 */
		public function getRelPath() { return $this->sRelPath; }
		
		
		/**
		 * This function creates all the top part of the pages until where the Unique Page Content is added.
		 */
		private function compileHead() {
			?>
                 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
                   <html xmlns="http://www.w3.org/1999/xhtml">
                      <head>
						<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
						<title>Jasdeep - <?php echo $this->sTitle ?></title>
					  </head>
                    <body>
                    <div>
                        <div id="header">
                            <h1>Jasdeep Singh Saini</h1>
                            <h2>Web Developer</h2>
                        </div>
                        
							<div id="content">
                         
			<?php
		}
		
		/**
		 * This function creates the last part of the page. Just after the unique page content.
		 */
		public function compileFoot() {
			?>
							
                <div id="footer">
                    <p>Copyright &copy; 2013. All Rights Reserved.</p>
                </div>
            </div>
            </div>
            </body>
            </html>
			<?php
		}
		
		/**
		 * This function creates the page. It depends on the class of which was inherited, since it calls its compilePage function.
		 */		
		public function compile() {
			$this->compileHead();
			$this->compilePage();
			$this->compileFoot();
		}
	
	
	}

?>
