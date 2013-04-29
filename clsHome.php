<?php
  /** Page 2
	 * 
	 * This class extends the clsStorePage Class which is responsible for generating all the Web Site Similar HTML Structure.
	 * The class MUST contain a compilePage which will be called to show it's content.
	 */
	class clsHome extends clsStorePage {
		
		
		/**
		 * Here is where all the content must be generated. 
		 * Subclasses could be use to show the information, or just in script type with conditions.
		 * 
		 */
		public function compilePage() {
			
			$showWhat = $_GET["w"];
			switch($showWhat) {
				case "form":
					$this->showForm();
					break;
				case "name":
					$this->showName();
					break;
				default:
					$this->showDefault();
					break;
			}
		}
		
		private function showForm() {
			$this->oCommonFunc->compileSectionTitle("THIS IS A FORM");
		}
		
		private function showName() {
			echo "<h1>My name is Jasdeep</h1>";
		}
		
		private function showDefault() {
			?>
				
                <p>This is the default location</p>
				
				
			<?php			
		}
		
		
		
	}


?>
