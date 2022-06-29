<!-- Function convert slugs to full names. -->
<?php function slugConverter($slug){
		$slug === 'tos' ? 'Terms of Service' : 'Privacy Policy';
	}
?>

<!doctype html>
<html>

	<head>
		<!-- Function called to convert slug into tab name  -->
		<title> {{slugConverter($subsection)}} </title>
		<link rel="stylesheet" href="/app.css">
	</head>

	<body>
		<!-- Page heading -->
		<x-header />

		<div class="categoryItem3" style="text-align: left;">

			<!-- Display the terms of service or the privacy policy, depending on which slug was passed -->
			<h2> Legal: {{slugConverter($subsection)}}</h2>

			@if ($subsection === 'tos' )

				<p>
					<h1>Terms of Use</h1>
					Last updated: September 12, 2021
					<br><br>
					Please read these terms and conditions carefully before using Our Service.
				</p>

				<p>
					<h1>Interpretation and Definitions</h1>
					<br><br>
					Interpretation
					The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.
				</p>

				<p>
					<h1>Definitions</h1>
					For the purposes of these Terms and Conditions:
					<br><br>
					Affiliate means an entity that controls, is controlled by or is under common control with a party, where "control" means ownership of 50% or more of the shares, equity interest or other securities entitled to vote for election of directors or other managing authority.
					<br><br>
					Account means a unique account created for You to access our Service or parts of our Service.
					<br><br>
					Company (referred to as either "the Company", "We", "Us" or "Our" in this Agreement) refers to PrivacyPolicies.com website.
					<br><br>
					Content refers to content such as text, images, or other information that can be posted, uploaded, linked to or otherwise made available by You, regardless of the form of that content.
					<br><br>
					Device means any device that can access the Service such as a computer, a cellphone or a digital tablet.
					<br><br>
					Feedback means feedback, innovations or suggestions sent by You regarding the attributes, performance or features of our Service.
					<br><br>
					Products refer to the products or items offered for sale on the Service.
					<br><br>
					Orders mean a request by You to purchase Products from Us.
					<br><br>
					Promotions refer to contests, sweepstakes or other promotions offered through the Service.
					<br><br>
					Service refers to the Website.
					<br><br>
					Terms and Conditions (also referred as "Terms" or "Terms of Use") mean these Terms and Conditions that form the entire agreement between You and the Company regarding the use of the Service.
					<br><br>
					Third-party Social Media Service means any services or content (including data, information, products or services) provided by a third-party that may be displayed, included or made available by the Service.
					<br><br>
					Website refers to PrivacyPolicies.com, accessible from https://www.privacypolicies.com
					<br><br>
					You means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.
					<br><br>
				</p>

				<p>
					<h1>Acknowledgment</h1>
					<br><br>
					These are the Terms and Conditions governing the use of this Service and the agreement that operates between You and the Company. These Terms and Conditions set out the rights and obligations of all users regarding the use of the Service.
					<br><br>
					Your access to and use of the Service is conditioned on Your acceptance of and compliance with these Terms and Conditions. These Terms and Conditions apply to all visitors, users and others who access or use the Service.
					<br><br>
					By accessing or using the Service You agree to be bound by these Terms and Conditions. If You disagree with any part of these Terms and Conditions then You may not access the Service.
					<br><br>
					You represent that you are over the age of 18. The Company does not permit those under 18 to use the Service.
					<br><br>
					Your access to and use of the Service is also conditioned on Your acceptance of and compliance with the Privacy Policy of the Company. Our Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your personal information when You use the Application or the Website and tells You about Your privacy rights and how the law protects You. Please read Our Privacy Policy carefully before using Our Service.
					<br><br>
				</p>

				<p>
					<h1>Legal Advice Disclaimer for Our Products</h1>
					<br><br>
					You understand that we offer legal contracts, policies or agreements ("Products"), as created and/or verified by attorneys or paralegals for sale through our Service. You acknowledge that We are not attorneys or paralegals nor do We offer legal advice. You acknowledge that We do not endorse any specific attorney or paralegal or any Product as being better than another. We do not otherwise guarantee the legal accuracy or applicability of any Product for your legal needs. You will at all times look to any attorney or paralegal that you select for services as to any legal claims related to such services.
					<br><br>
					You understand that it is your responsibility to ensure that the privacy policy or any other policies you create with us is complete, accurate, and meets your companies specific privacy needs.
					<br><br>
					We are not liable or responsible for any privacy policies or any other policies created using our services, and we give no representations or warranties, express or implied, that the privacy policies or any other policies created using our service are complete, accurate or free from errors or omissions.
				</p>
			@else

			<p>
				<h1>Privacy Policy</h1>
				Last updated: September 12, 2021
				<br><br>
				This Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You.
				<br><br>
				We use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information in accordance with this Privacy Policy.

				Interpretation and Definitions
				Interpretation
				The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.
			</p>

			<p>
				<h1>Definitions</h1>
				For the purposes of this Privacy Policy:
				<br><br>
				Account means a unique account created for You to access our Service or parts of our Service.
				<br><br>
				Business, for the purpose of the CCPA (California Consumer Privacy Act), refers to the Company as the legal entity that collects Consumers' personal information and determines the purposes and means of the processing of Consumers' personal information, or on behalf of which such information is collected and that alone, or jointly with others, determines the purposes and means of the processing of consumers' personal information, that does business in the State of California.
				<br><br>
				Company (referred to as either "the Company", "We", "Us" or "Our" in this Agreement) refers to PrivacyPolicies.com website.
				<br><br>
				For the purpose of the GDPR, the Company is the Data Controller.
				<br><br>
				Consumer, for the purpose of the CCPA (California Consumer Privacy Act), means a natural person who is a California resident. A resident, as defined in the law, includes (1) every individual who is in the USA for other than a temporary or transitory purpose, and (2) every individual who is domiciled in the USA who is outside the USA for a temporary or transitory purpose.
				<br><br>
				Cookies are small files that are placed on Your computer, mobile device or any other device by a website, containing the details of Your browsing history on that website among its many uses.
				<br><br>
				Data Controller, for the purposes of the GDPR (General Data Protection Regulation), refers to the Company as the legal person which alone or jointly with others determines the purposes and means of the processing of Personal Data.
				<br><br>
				Device means any device that can access the Service such as a computer, a cellphone or a digital tablet.
				<br><br>
				Do Not Track (DNT) is a concept that has been promoted by US regulatory authorities, in particular the U.S. Federal Trade Commission (FTC), for the Internet industry to develop and implement a mechanism for allowing internet users to control the tracking of their online activities across websites.
				<br><br>
				Facebook Fan Page is a public profile named PrivacyPolicies Facebook Fan Page specifically created by the Company on the Facebook social network, accessible from https://www.facebook.com/PrivacyPoliciescom-1641117666139253/
				<br><br>
				Personal Data is any information that relates to an identified or identifiable individual.
				<br><br>
				For the purposes for GDPR, Personal Data means any information relating to You such as a name, an identification number, location data, online identifier or to one or more factors specific to the physical, physiological, genetic, mental, economic, cultural or social identity.
				<br><br>
				For the purposes of the CCPA, Personal Data means any information that identifies, relates to, describes or is capable of being associated with, or could reasonably be linked, directly or indirectly, with You.
				<br><br>
				Sale, for the purpose of the CCPA (California Consumer Privacy Act), means selling, renting, releasing, disclosing, disseminating, making available, transferring, or otherwise communicating orally, in writing, or by electronic or other means, a Consumer's personal information to another business or a third party for monetary or other valuable consideration.
				<br><br>
				Service refers to the Website.
				<br><br>
				Service Provider means any natural or legal person who processes the data on behalf of the Company. It refers to third-party companies or individuals employed by the Company to facilitate the Service, to provide the Service on behalf of the Company, to perform services related to the Service or to assist the Company in analyzing how the Service is used. For the purpose of the GDPR, Service Providers are considered Data Processors.
				<br><br>
				Usage Data refers to data collected automatically, either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).
				<br><br>
				Website refers to PrivacyPolicies.com, accessible from https://www.privacypolicies.com
				<br><br>
				You means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.
				<br><br>
				Under GDPR (General Data Protection Regulation), You can be referred to as the Data Subject or as the User as you are the individual using the Service.
			</p>

			@endif
		</div>

		<div class="item5">
			<x-alert />
			<x-footer />
		</div>
	</body>

</html>

<!-- Refs: -->
<!-- https://www.privacypolicies.com/our-terms-of-use/ -->
<!-- https://www.privacypolicies.com/our-privacy-policy/ -->
