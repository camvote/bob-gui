<?php

/*
	This class implements a unified directory access service.
	Calling classes can use this class to obtain details about organisations.
*/



# Class to provide organisation data
class providers
{
	# Register the directory providers

  private function get_providers () {

    require_once('spyc.php');

    foreach (scandir(__DIR__ . '/providers') as $filename) {
      if (
        $filename !== '.' &&
        $filename !== '..' &&
        is_file(__DIR__ . '/providers/' . $filename) &&
        is_readable(__DIR__ . '/providers/' . $filename) &&
        pathinfo(__DIR__ . '/providers/' . $filename)['extension'] === 'yaml' 
      ) {
        $this->providers = array_merge(
          $this->providers,
          // json_decode(file_get_contents(__DIR__ . '/providers/' . $filename), true)
          // decode yaml
          Spyc::YAMLLoad(__DIR__ . '/providers/' . $filename)
        );
      }
    }
  }

  private $providers = array();
	
  // private $providers = array (
	// 	'university' => array (
	// 		'id' => 'university',
	// 		'name' => 'University',
	// 		'baseUrl' => '/',
	// 		'imageSubfolder' => '/images/',
	// 		'managerClaimFormLocation' => '/feedback.html',		// or false if none
	// 		'typeSingular' => 'organisation',
	// 		'typeSingularUcfirst' => 'part of the University',
	// 		'administrators' => array ('bpc38', ),
	// 		'organisations' => array (
	// 			'qjcr' => array (
	// 				'organisationName' => 'QJCR',
	// 				'profileBaseUrl' => 'https://qjcr.org.uk',	// Not slash-terminated
	// 				'logoLocation' => 'https://qjcr.org.uk/content/squarelogo.png',
	// 			),
	// 		),
	// 	),
	// );
	
	# Protected provider names, which the Provider API should not be presenting
	private $protectedProviderNames = array ('bob', 'bobgui', 'images', 'openstv', 'style', 'controlpanel', );
	
	
	
	# Constructor
	public function __construct ()
	{
    $this->get_providers();
    
		# Compute the imageStoreRoot
		foreach ($this->providers as $provider => $attributes) {
			$this->providers[$provider]['imageStoreRoot'] = $_SERVER['DOCUMENT_ROOT'] . $attributes['baseUrl'] . $attributes['imageSubfolder'];
		}
		
	}
	
	
	/*
	 *	getProviders
	 */
	
	# Public accessor
	public function getProviders ()
	{
		return $this->providers;
	}
	
	
	# Function to get a user's organisations
	public function getOrganisationsOfUser ($username, $limitToFields, $limitToProviderId = false, $includeTestOrganisations = false)
	{
		# Return false if no username supplied (e.g. not logged in)
		if (!$username) {return array ();}
		
		# Ask each provider for the organisations of this user
		$organisationsOfUser = array ();
		foreach ($this->providers as $providerId => $provider) {
			
			# Skip if a specific provider has been requested, and this is not it
			if ($limitToProviderId && ($providerId != $limitToProviderId)) {continue;}
			
			# Get the organisations of that user, and add them to the list
			$organisationsOfUser[$providerId] = (in_array ($username, $provider['administrators']) ? $provider['organisations'] : array ());
			
			# Ensure providers do not emit a protected name (which each provider should enforce anyway)
			foreach ($organisationsOfUser[$providerId] as $organisationId => $organisation) {
				if (in_array ($organisationId, $this->protectedProviderNames)) {
					unset ($organisationsOfUser[$providerId][$organisationId]);
				}
			}
			
			# Limit to fields, to avoid leaking data
			/*
			bobguiAdminister requests: logoLocation, organisationName, profileBaseUrl
			*/
			foreach ($organisationsOfUser[$providerId] as $organisationId => $organisation) {
				foreach ($organisation as $field => $value) {
					if (!in_array ($field, $limitToFields)) {
						unset ($organisationsOfUser[$providerId][$organisationId][$field]);
					}
				}
			}
		}
		
		# Return the list
		return $organisationsOfUser;
	}
}

?>

