<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1"><i class="glyphicon glyphicon-plus"></i> Add Equipment Reservation</button>

<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Equipment reservation</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>	
      </div>
      <div class="modal-body">

					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:10px;">

					  <div class="form-group">
						<label for="date_reservation" class="col-sm-4 control-label">Date of activity</label>
						<div class="col-sm-8">
						  <input type="date" name="date_reservation" class="form-control" id="date_reservation" required />
						</div>
					  </div>
                        
                      <div class="form-group">
						<label for="time_activity" class="col-sm-4 control-label">Time of activity</label>
						<div class="col-sm-8">
						  <select name="time_activity" class="form-control" required >
							<option></option>
                              <option>07:30AM-09:00AM</option>
                              <option>09:00AM-10:30AM</option>
                              <option>10:30AM-12:00PM</option>
                              <option>12:00PM-13:30PM</option>
                              <option>13:30PM-15:00PM</option>
                              <option>15:00PM-16:30PM</option>
                              <option>16:30PM-18:00PM</option>
                              <option>08:00AM-11:00AM</option>
                              <option>11:30AM-14:30PM</option>
                              <option>15:00PM-18:00PM </option>  
                              <option>18:00PM-21:00PM </option>  
						  </select>
						</div>
					  </div>  
                        
                       <div class="form-group">
						<label for="equipment" class="col-sm-4 control-label">Equipment to reserve</label>
						<div class="col-sm-8">
						  <select name="equipment" class="form-control" required >
							<option></option>
                              <option>LCD-1</option>
                              <option>LCD-2</option>
                              <option>Laptop-1</option>
                              <option>Laptop-2</option>
                              <option>TV-1</option>
                              <option>TV-2</option>         
						  </select>
						</div>
					  </div>                         

					  <div class="form-group">
						<label for="name" class="col-sm-4 control-label">Name</label>
						<div class="col-sm-8">
						  <input type="text" name="name" class="form-control" id="name" placeholder="Name...." required />
						</div>
					  </div> 
                        
 					  <div class="form-group">
						<label for="idnumber" class="col-sm-4 control-label">ID number</label>
						<div class="col-sm-8">
						  <input type="text" name="idnumber" class="form-control" id="idnumber" placeholder="ID number..." required />
						</div>
					  </div>                       
                        
 					  <div class="form-group">
						<label for="contact" class="col-sm-4 control-label">Contact number</label>
						<div class="col-sm-8">
						  <input type="text" name="contact" class="form-control" id="contact" placeholder="Contact number..." required />
						</div>
					  </div>
                        
                        
                        <div class="form-group">
						<label for="subject" class="col-sm-4 control-label">Course/Subject</label>
						<div class="col-sm-8">
						  <select name="subject" class="form-control" required >
							<option></option>
                            <option>AC-101	 PRINCIPLES OF ACCOUNTING I</option>
                            <option>AC-102	 PRINCIPLES OF ACCOUNTING II</option>
                            <option>AD-101	 DESKTOP PUBLISHING and GRAPHICS</option>
                            <option>AD-102	 PRINCIPLES OF COPYWRITING</option>
                            <option>ARTH-101 INTRODUCTION TO THEATER ARTS</option>
                            <option>ARTV-101 DRAWING 1</option>
                            <option>ARTV-102 VISUAL DESIGN 1</option>
                            <option>AY-1101	 PRACTICUM</option>
                            <option>AY-1102	 MANAGEMENT INFORMATION SYSTEM</option>
                            <option>AY-1103	 CONTEMPORARY ISSUES IN ACCOUNTING</option>
                            <option>AY-1105	 FINANCIAL MANAGEMENT II</option>
                            <option>AY-1106	 AUDITING IN AN INFORMATION TECHNOLOGY ENVIRONMENT</option>
                            <option>BA-55    DEVELOPMENT OF ENTERPRISES</option>
                            <option>BA-58    ADVANCED MARKETING</option>
                            <option>BA-101	 BUSINESS COMMUNICATIONS</option>
                            <option>BA-102	 BUSINESS SOFTWARE APPLICATION</option>
                            <option>BA-103	 MANAGERIAL ACCOUNTING</option>
                            <option>BA-104	 MANAGEMENT  INFORMATION SYSTEM</option>
                            <option>BA-105	 BUSINESS POLICY WITH CORPORATE GOVERNANCE</option>
                            <option>BA-106	 DEVELOPMENT OF ENTERPRISE</option>
                            <option>BA-1102	 DESIGNING and DEVELOPING EFFECTIVE WEBSITES</option>
                            <option>BAE-101	 INTRODUCTION TO E-COMMERCE</option>
                            <option>BAE-102	 HARDWARE AND SOFTWARE BASICS</option>
                            <option>BAE-103	 SUPPLY CHAIN MANAGEMENT</option>
                            <option>BAE-104	 DESIGNING AND DEVELOPING WEBSITES</option>
                            <option>BAE-105	 INTERNET OPERATIONS MANAGEMENT</option>
                            <option>BAE-106	 E-COMMERCE ISSUES</option>
                            <option>BAE-107	 INTERNATIONAL TRADE</option>
                            <option>BAE-108  INTERNET MARKETING</option>
                            <option>BAF-101	 FINANCIAL INSTITUTIONS</option>
                            <option>BAF-102	 INVESTMENT MANAGEMENT</option>
                            <option>BAF-103	 CAPITAL AND DEBT MARKETS</option>
                            <option>BAF-104	 ADVANCED FINANCE</option>
                            <option>BAF-105	 PERSONAL FINANCIAL PLANNING</option>
                            <option>BAF-106	 INTERNATIONAL FINANCE</option>
                            <option>BAF-107	 PUBLIC FINANCE</option>
                            <option>BAF-109  RISK MANAGEMENT</option>
                            <option>BAF-110  MERGERS AND ACQUISITIONS</option>
                            <option>BAM-101	 MARKETING RESEARCH
                            <option>BAM-102	 PRICING STRATEGY
                            <option>BAM-103	SALES MANAGEMENT
                            <option>BAM-104	ADVERTISING AND PROMOTIONS MANAGEMENT
                            <option>BAM-105	INTERNATIONAL MARKETING
                            <option>BAM-106	ADVANCED MARKETING ISSUES
                            <option>BAM-107 BAND MANAGEMENT
                            <option>BAM-109	DIRECT MARKETING
                            <option>BL-101	BUSINESS LAW
                            <option>BL-102	LAW ON OBLIGATIONS AND CONTRACTS
                            <option>BL-103	LAW ON BUSINESS ORGANIZATIONS
                            <option>BL-104	LAW ON NEGOTIABLE INSTRUMENTS
                            <option>BL-105	SALES AGENCY LABOR AND OTHER COMMERCIAL LAWS
                            <option>BSA-33	MARKETING
                            <option>BSA-44	BUSINESS POLICY
                            <option>BSA-101	FUNDAMENTALS OF ACCOUNTING I
                            <option>BSA-102	FUNDAMENTALS OF ACCOUNTING II
                            <option>BSA-103	FINANCIAL ACCOUNTING AND REPORTING I
                            <option>BSA-104	FINANCIAL ACCOUNTING AND REPORTING II
                            <option>BSA-105	FINANCIAL ACCOUNTING AND REPORTING III
                            <option>BSA-106	FINANCIAL ACCOUNTING AND REPORTING IV
                            <option>BSA-107	COST ACCOUNTING AND COST MANAGEMENT I
                            <option>BSA-108	COST ACCOUNTING AND COST MANAGEMENT II
                            <option>BSA-109	ADVANCED FINANCIAL ACCOUNTING AND REPORTING I
                            <option>BSA-110	ADVANCED FINANCIAL ACCOUNTING AND REPORTING II
                            <option>BSA-113	ACCTG FOR GOVT NOT-FOR-PROF. ENTTITIES and SPEC. IND.
                            <option>BSA-114	ASSURANCE PRINCIPLE PROFFESIONAL ETHICS AND GOOD GOVERNANCE
                            <option>BSA-115	APPLIED AUDITING
                            <option>BSA-117	MANAGEMENT ACCOUNTING I
                            <option>BSA-118	MANAGEMENT ACCOUNTING II
                            <option>BSA-119 MANAGEMENT CONSULTANCY
                            <option>BSA-120	INTEGRATTED ACCOUNTING 1
                            <option>BSA-122	PRACTICUM
                            <option>BSA-123	BASIC FINANCE
                            <option>BSA-124	FINANCIAL MANAGEMENT I
                            <option>BSA-125	FINANCIAL MANAGEMENT II
                            <option>BSA-126	FUNDAMENTALS OF COMPUTER SOFTWARE AND APPLICATION
                            <option>BSA-127	DATABASE THEORY AND APPLICATIONS
                            <option>BSA-128	FUNDAMENTALS OF INFORMATION SYSTEM AND SYSTEM DEVELOPMENT
                            <option>BSA-129	ACCOUNTING INFORMATION SYSTEM
                            <option>BSA-130	GOOD GOVERNANCE AND SOCIAL RESPONSIBILITY
                            <option>BSA-131	HUMAN BEHAVIOR IN AN ORGANIZATION
                            <option>BSA-132 BUSINESS POLICY AND STRATEGY
                            <option>BSA-133 SYNTHESIS
                            <option>BSA-204	FINANCIAL MANAGEMENT
                            <option>BSA-401	INCOME TAXATION
                            <option>BSA-402	BUSINESS AND TRANSFER TAXES
                            <option>BSA-512	MANAGEMENT SERVICES II
                            <option>BSA-611	ADVANCED ACCOUNTING I
                            <option>BSA-612	ADVANCED ACCOUNTING II
                            <option>BSA-711	ACCOUNTING REFRESHER;
                            <option>CA-42.1	FILM THEORY AND PRACTICE
                            <option>CA-43	DEVELOPMENT COMMUNICATION
                            <option>CA-101	INTRODUCTION TO COMMUNICATIONS
                            <option>CA-102	GENDER AND COMMUNICATION
                            <option>CA-103	THEORIES OF COMMUNICATION
                            <option>CA-104	EFFECTIVE PRESENTATION AND MULTI-MEDIA TECHNIQUES
                            <option>CA-105	MULTI-CULTURAL INTERPERSONAL COMMUNICATION
                            <option>CA-106	THEATER ARTS THEORY AND APPRECIATION
                            <option>CA-107	MARKETING PRINCIPLES AND PRACTICE
                            <option>CA-108	JOURNALISM
                            <option>CA-109	TELEVISON PRODUCTION
                            <option>CA-110	ADVERTISING PRINCIPLES AND PRACTICE
                            <option>CA-111	RADIO PRODUCTION
                            <option>CA-112	INTRODUCTION TO COMMUNICATION RESEARCH
                            <option>CA-113	PUBLIC RELATIONS PRINCIPLES AND PRACTICE
                            <option>CA-114	JOB TRAINING
                            <option>CA-115	COMMUNICATION AND ENTREPNEURSHIP
                            <option>CA-116	FILM THEORY AND PRACTICE
                            <option>CA-117	RESEARCH WRITING I
                            <option>CA-118	MEDIA LAWS AND ETHICS
                            <option>CA-119	RESEARCH WRITING II
                            <option>CA-120	STRATEGIC MANAGEMENT COMMUNICATION
                            <option>CA-121	DEVELOPMENT COMMUNICATION
                            <option>CA-122	AUDIO-VISUAL COMMUNICATION
                            <option>CA-125	WRITING FOR TELEVISION
                            <option>CA-127	SEMINAR ON AUDIO AND VIDEO POST PRODUCTION
                            <option>CA-128	AESTHETICS AND VISUAL COMMUNICATION
                            <option>CA-129	FOUNDATIONS OF EVENTS COMMUNICATION AND MANAGEMENT
                            <option>CA-130	MUSIC IN MEDIA
                            <option>CA-131	DIGITAL IMAGING
                            <option>CA-132	DIGITAL SOUND PRODUCTION
                            <option>CA-133	DIGITAL FILMMAKING
                            <option>CA-134	WEB DESIGN
                            <option>CA-1102 COMMUNITY COMMUNICATION
                            <option>CD-101	CHILD ADOLESCENT DEVELOPMENT
                            <option>CD-101F	FIELD STUDY
                            <option>CD-102	EDUCATIONAL TECHNOLOGY 1
                            <option>CD-103	FOUNDATIONS OF EDUCATION
                            <option>CD-104	PRINCIPLES AND TECHNIQUES IN TEACHING
                            <option>CD-104F	FIELD STUDY 1
                            <option>CD-105	EDUCATIONAL TECHNOLOGY 2
                            <option>CD-105F	FIELD STUDY 2
                            <option>CD-106	INSTRUCTIONAL MATERIALS
                            <option>CD-106F	FIELD STUDY 2
                            <option>CD-107	EDUCATION FOR PEACE GENDER EQUALITY AND THE ENVIRONMENT
                            <option>CD-108	PROBLEMS AND GUIDANCE IN CHILD DEVELOPMENT
                            <option>CD-109	EDUCATIONAL PSYCHOLOGY
                            <option>CD-110	METHODS IN TEACHING MATH SCIENCE DEVELOPMENTAL READING
                            <option>CD-111	DEVELOPMENTAL READING
                            <option>CD-112	CREATIVE ARTS MUSIC PE AND DRAMA
                            <option>CD-113	EXCEPTIONAL PSYCHOLOGY
                            <option>CD-114	METHODS IN TEACHING READING LANGUAGE  STORYTELLING
                            <option>CD-115	MEASUREMENT AND EVALUATION
                            <option>CD-116	CURRICULUM DEVELOPMENT
                            <option>CD-116F	FIELD STUDY 4
                            <option>CD-117	MORAL DEVELOPMENT AND EDUCATION
                            <option>CD-118	ASSESSMENT IN EARLY CHILDHOOD EDUCATION
                            <option>CD-118F	FIELD STUDY 6
                            <option>CD-119	OBSERVATION AND PARTICIPATION
                            <option>CD-120	ADMINISTRATION AND SUPERVISION OF EARLY CHILDHOOD SC
                            <option>CD-121	DIRECTED PRACTICE TEACHING
                            <option>CDS-101	METHODS AND MATERIALS IN TEACHING THE EXCEPTIONAL CHILD I
                            <option>CDS-102	METHODS and MATERIALS IN TEACHING THE EXCEPTIONAL CHILD II
                            <option>CDS-103	BEHAVIORAL MANAGEMENT
                            <option>CDS-104	GUIDANCE AND COUNSELING OF CHILDREN WITH SPECIAL NEEDS
                            <option>CT-100	COMPUTER FUNDAMENTALS AND PLF
                            <option>CT-101	MICROSOFT OFFICE PROGRAMS
                            <option>CT-102	WEB PAGE DESIGN, HOSTING AND DEVELOPMENT
                            <option>CT-103	DESKTOP PUBLISHING and WEB GRAPHICS
                            <option>CT-104	MULTIMEDIA PROCESSES and ANIMATION
                            <option>CT-105	PROGRAMMING LANGUAGE I
                            <option>CT-106	PROGRAMMING LANGUAGE II
                            <option>CT-107	PROGRAMMING LANGUAGE III
                            <option>CT-108	ADVANCED DATABASE MANAGEMENT SYSTEM
                            <option>CT-109	STATISTICAL PACKAGE AND RESEARCH
                            <option>CT-110	IT PROJECT MANAGEMENT AND ARTIFICIAL INTELLIGENCE
                            <option>CT-1109	DATABASE MANAGEMENT SYSTEM II
                            <option>CT-111	SYSTEMS ANALYSIS AND DESIGN
                            <option>CT-112	ADVANCED COMPUTER FOR BIOLOGY
                            <option>CWTS-1	CIVIC WELFARE TRAINING SERVICE I
                            <option>CWTS-2	CIVIC WELFARE TRAINING SERVICE II
                            <option>E-31	WORLD LITERATURE I
                            <option>E-32	WORLD LITERATURE II
                            <option>E-100HI	INTENSIVE ENGLISH
                            <option>E-101	COMMUNICATION SKILLS I
                            <option>E-102	SPEECH COMMUNICATION
                            <option>E-103	FUNDAMENTALS OF RESEARCH
                            <option>E-104	BUSINESS ENGLISH
                            <option>E-105	LITERATURES OF THE PHILIPPINES
                            <option>E-106	WORLD LITERATURE I AND II THE CLASSICS AND CONTEMPORARY
                            <option>E-107	TECHNICAL WRITING BUSINESS
                            <option>E-109	POETRY WRITING
                            <option>ECO-100	INTRODUCTION TO ECONOMICS WITH LRT
                            <option>ECO-101	MACROECONOMICS
                            <option>ECO-102	MACROECONOMICS WITH LRT
                            <option>ECO-103	MICROECONOMICS
                            <option>EPC-101	ENERGY SECURITY and SUSTAINABLE DEVELOPMENT
                            <option>EPM-101	INTRODUCTION TO ENVIRONMENTAL PLANNING AND MANAGEMENT
                            <option>EPM-108	QUANTITATIVE PLANNING METHODS AND TECHNIQUES
                            <option>EPM-109	POLLUTION SCIENCE AND TECHNOLOGY
                            <option>EPM-110	PLANNING FOR ECONOMIC SECTORS
                            <option>EPM-111	URBAN PLANNING
                            <option>EPM-112	ENVIRONMENTAL PLANNING AND MANAGEMENT RESEARCH
                            <option>EPM-113	ECOLOGICAL MONITORING
                            <option>EPM-114	REGIONAL PLANNING AND NATURAL RESOURCE MANAGEMENT
                            <option>EPM-115	THESIS WRITING I
                            <option>EPM-116	THESIS WRITING II
                            <option>EPM-118	INTRODUCTION TO ENVIRONMENTAL IMPACT ASSESSMENT
                            <option>EPM-119	PROJECT DEVELOPMENT AND MANAGEMENT
                            <option>EPM-120	COMMUNICATION AND ADVOCACY FOR THE ENVIRONMENT
                            <option>EPM-121	CORPORATE ENVIRONMENPLANNING AND ENVIRONMENTAL LAW
                            <option>EPM-122	PLANNING AND ENVIRONMENTAL LAW
                            <option>EPM-123	ENVIRONMENTAL GEOGRAPHY
                            <option>EPM-124	ALTERNATIVE THEORIES AND CONCEPTS OF SUSTAINABLE DEVELOPMENT
                            <option>EPM-125	FUNDAMENTALS OF ENVIRONMENTAL SCIENCE
                            <option>EPM-126	SOLID WASTE MANAGEMENT
                            <option>EPM-127	INTRO. TO GEO-HAZARD ASSESSMENT and THE EIA PROCESS
                            <option>EPM-128	INT'L ENVI LAWS and MULTILATERAL and BILATERAL AGREEMENT
                            <option>EPM-129	ENVIRONMENTAL RESEARCH METHODS
                            <option>EPM-130	ENVIRONMENTAL COST MANAGEMENT
                            <option>EPM-131	SOCIO-ECONOMMIC PLANNING and GOVERNANCE
                            <option>EPM-132 FEASIBILITY STUDY and PROJECT
                            <option>EPM-133	NATURAL RESOURCES AND ECOSYSTEM MANAGEMENT
                            <option>EPU-101	CARTOGRAPHY
                            <option>EPU-102	URBAN AND REGIONAL PLANNING
                            <option>EPU-103	COMPUTER-AIDED DESIGN CAD TECHNIQUE
                            <option>EPU-105	LAND USE AND SETTLEMENT PLANNING
                            <option>EPU-106	SITE PLANNING
                            <option>EPU-107	UTILITIES AND INFRASTRUCTURE PLANNING
                            <option>EPU-109 URBAN PLANNING-THESIS WRITING
                            <option>ET-101	ENTREPRENEURSHIP PRINCIPLES AND PRACTICES
                            <option>ET-102	ENTERPRISE PLANNING
                            <option>ET-103	ENTERPRISE PLANNING II
                            <option>ET-104	COSTING AND PRICING POLICY
                            <option>ET-106	ENTREPRENEURSHIP ONLINE I
                            <option>ET-107	ENTREPRENEURSHIP ON-LINE II
                            <option>ET-108A	BUSINESS PRACTICUM
                            <option>ET-108B	BUSINESS PRACTICUM (BUS.LAB)
                            <option>ET-109	PHILIPPINE BUSINESS ENVIRONMENT WITH ETHICS
                            <option>ET-110	BUSINESS POLICY
                            <option>ET-111	EVENTS MANAGEMENT
                            <option>ET-112	MARKETING COMMUNICATIONS
                            <option>ET-113	FAMILY BUSINESS MANAGEMENT
                            <option>ET-117	INT'L BUSINESS
                            <option>ET-118A	BASIC FOOD PREPARATION AND SERVICE I
                            <option>ET-118B	BASIC FOOD PREPARATION AND SERVICE II
                            <option>ET-119A	ADVANCED FOOD PREPARATION AND SERVICE I
                            <option>ET-119B	ADVANCED FOOD PREPARATION AND SERVICE II
                            <option>ET-120A	FASHION ILLUSTRATION DESIGN I
                            <option>ET-120B	FASHION ILLUSTRATION DESIGN II
                            <option>ET-121A	ADVANCED FASHION ILLUSTRATION DESIGN I
                            <option>ET-121B	ADVANCED FASHION ILLUSTRATION DESIGN II
                            <option>ET-122A	BASIC PRODUCTION DESIGN AND DEVELOPMENT I
                            <option>ET-122B	BASIC PRODUCTION DESIGN AND DEVELOPMENT II
                            <option>ET-123A	ADVANCED PRODUCT DESIGN and DEV'T WITH LAB 1 (ELEC)
                            <option>ETC-101	FOUNDATIONS OF CULINARY ARTS
                            <option>ETC-102	CULINARY I
                            <option>ETC-103	KITCHEN MATHEMATICS
                            <option>ETC-104	CULINARY II
                            <option>ETC-107	LOCAL INTERNSHIP
                            <option>ETC-108 INTERNATIONAL INTERNSHIP
                            <option>FIL-101.1 KOMUNIKASYON SA AKADEMIKONG FILIPINO
                            <option>FIL-102	PAGBASA AT PAGSULAT SA IBAT IBANG DISIPLINA
                            <option>FIL-102.1	PAGBASA AT PAGSULAT TUNGO SA PANANALIKSIK
                            <option>FIL-103	RETORIKA
                            <option>FIL-103.1	MASINING NA PAGPAPAHAYAG
                            <option>FL-101	FOREIGN LANGUAGE I
                            <option>FL-102	FOREIGN LANGUAGE II
                            <option>FR-101	ELEMENTARY FRENCH
                            <option>FR-102	INTERMEDIATE FRENCH
                            <option>FR-103	CONVERSATIONAL FRENCH
                            <option>FR-104	FRENCH FOR BUSINESS
                            <option>H-12	ASIAN CIVILIZATION
                            <option>H-101	KASAYSAYAN NG PILIPINAS
                            <option>H-101HI	KASAYSAYAN NG PILIPINAS W/ RIZAL
                            <option>H-102	ASIAN CIVILIZATION
                            <option>H-103	WESTERN CIVILIZATION
                            <option>H-104	RIZAL
                            <option>H-105	PHILIPPINE GOVERNMENT WITH CONSTITUTION
                            <option>HU-101	INTRODUCTION TO HUMANITIES
                            <option>HU-102	ART AND DESIGN
                            <option>IM-212	INFORMATION TECHNOLOGY AND MEDIA EDUCATION
                            <option>IS-37	PRACTICUM
                            <option>IS-45	PUBLIC AND PRIVATE INTERNATIONAL LAW
                            <option>IS-101	PHILIPPINE NATIONALISM AND CULTURE  CONSTRUCTION AND ASSERTIONS
                            <option>IS-102	INTRODUCTION TO POLITICAL ANALYSIS
                            <option>IS-103	SOCIAL AND POLITICAL THOUGHT
                            <option>IS-104	THEORIES OF DEVELOPMENT
                            <option>IS-105	INTRODUCTION TO PEACE STUDIES
                            <option>IS-106	GENDER and SOCIETY
                            <option>IS-107	POLITICAL GEOGRAPHY
                            <option>IS-108	PHILIPPINE FOREIGN RELATIONS
                            <option>IS-108.1 PHILIPPINE FOREIGN POLICIES AND RELATIONS
                            <option>IS-109	INTERNATIONAL RELATIONS AND DIPLOMACY
                            <option>IS-109.1 INTERNATIONAL RELATIONS AND DIPLOMATIC PRACTICES
                            <option>IS-110	PRACTICUM INTERNATIONAL EXCHANGE PROGRAM
                            <option>IS-111	INTERNATIONAL ECONOMICS AND THE GLOBAL ECONOMY
                            <option>IS-112	RESEARCH METHODS I
                            <option>IS-113	RESEARCH METHODS II
                            <option>IS-114	PUBLIC INTERNATIONAL LAW
                            <option>ISD-101	ISSUES AND CHALLENGES IN DEVELOPING NATIONS
                            <option>ISD-102	GOVERNANCE, DEVELOPMENT AND CIVIL SOCIETY
                            <option>ISD-103	DEVELOPMENT PLANNING AND ANALYSIS
                            <option>ISD-104	MANAGEMENT OF DEVELOPMENT ORGANIZATIONS
                            <option>ISD-105	AID  DEVELOPMENT AND FINANCE
                            <option>ISG-101	GENDER ANALYSIS IN DEVELOPMENT
                            <option>ISG-102	GENDER LANGUAGE AND EDUCATION
                            <option>ISG-103	GENDER  LAW AND POLITICS WOMEN S LEADERSHIP AND HUMAN RIGHTS
                            <option>ISG-104	COLLOQUIUM  CONTEMPORARY ISSUES IN GENDER AND DEVELOPMENT
                            <option>ISI-101	SEMINAR COURSE IN INTERNATIONAL AND REGIONAL ORGANIZATION
                            <option>ISI-102	THEORIES OF INTERNATINAL COOPERATION AND INTEGRATION
                            <option>ISI-103	COMPARATIVE FOREIGN POLICY OF SELECTED STATES
                            <option>ISI-104	INTERNATIONAL PEACE AND SECURITY
                            <option>ISI-105	SEMINAR COURSE IN GLOBAL GOVERNANCE AND CIVIL SOCIETY
                            <option>ISP-101	GLOBAL AND LOCAL PEACE ISSUES
                            <option>ISP-102	THEORY AND PRACTICE OF NON-VIOLENCE
                            <option>ISP-103	CONFLICT PREVENTION AND TRANSFORMATION
                            <option>ISP-104	INTERNATIONAL HUMANITARIAN ISSUES
                            <option>JAP-101	ELEMENTARY JAPANESE
                            <option>JAP-102 INTERMEDIATE JAPANESE
                            <option>LTM-101 COMMUNICATION TECHNOLOGY
                            <option>LTM-102	
                            <option>LTM-103	MANAGERIAL ACCOUNTING FOR TOURISM
                            <option>LTM-105	HEALTH AND SPA
                            <option>LTM-106	TOURISM MARKETING
                            <option>M-100	ESSENTIAL MATH
                            <option>M-101	COLLEGE ALGEBRA
                            <option>M-102	ELEMENTARY STATISTICS
                            <option>M-103	TRIGONOMETRY
                            <option>M-104	BUSINESS MATH
                            <option>M-105	MATH OF INVESTMENTS
                            <option>M-106	BUSINESS STATISTICS
                            <option>M-107	CALCULUS FOR BUSINESS
                            <option>M-108	QUANTITATIVE TECHNIQUES IN BUSINESS OPERATIONS
                            <option>M-109	CALCULUS WITH ANALYTICAL GEOMETRY
                            <option>MAN-101	ELEMENTARY MANDARIN
                            <option>MAN-102	INTERMEDIATE MANDARIN
                            <option>MAN-103	ADVANCED MANDARIN
                            <option>MAN-104	BUSINESS MANDARIN
                            <option>MC-101	MC CULTURE IDENTITY AND SOCIAL RESPONSIBILITY I
                            <option>MC-102	MC CULTURE IDENTITY AND SOCIAL RESPONSIBILITY II
                            <option>MG-101	PRINCIPLES OF MANAGEMENT and ORGANIZATION
                            <option>MG-102	MARKETING MANAGEMENT
                            <option>MG-103	FINANCIAL MANAGEMENT
                            <option>MG-104	HUMAN RESOURCE MANAGEMENT
                            <option>MG-105	PRODUCTION AND OPERATION MANAGEMENT
                            <option>MME-208	SEMINAR IN EDUCATIONAL MEASUREMENT and RESEARCH
                            <option>NSTP-2	CWTS 2 CHURCH LITURGY AND COMMUNITY SERVICE
                            <option>P-41	SOCIAL PHILOSOPHY
                            <option>P-101	CRITICAL THINKING
                            <option>P-102	PHILOSOPHY OF HUMAN PERSON
                            <option>PE-101	PHYSICAL FITNESS
                            <option>PE-102	RHYTHMIC ACTIVITIES
                            <option>PE-103	INDIVIDUAL/DUAL SPORTS
                            <option>PE-104	TEAM SPORTS
                            <option>PSY-25	PSYCHOLOGY OF LEARNING
                            <option>PSY-101	GENERAL PSYCHOLOGY
                            <option>PY-101.1 PERSONALITY
                            <option>PY-102	STATISTICS FOR PSYCHOLOGY
                            <option>PY-102.2 PSYCHOLOGICAL STATISTICS
                            <option>PY-103	SOCIAL PSYCHOLOGY
                            <option>PY-104	DEVELOPMENTAL PSYCHOLOGY
                            <option>PY-105	EXPERIMENTAL PSYCHOLOGY
                            <option>PY-106	ABNORMAL PSYCHOLOGY
                            <option>PY-108	INDUSTRIAL PSYCHOLOGY
                            <option>PY-109	PSYCHOLOGICAL TESTING
                            <option>PY-109.1 PSYCHOLOGICAL ASSESSMENT LECTURE
                            <option>PY-109.2 PSYCHOLOGICAL ASSESSMENT LABORATORY
                            <option>PY-110	RESEARCH IN PSYCHOLOGY I
                            <option>PY-111	RESEARCH IN PSYCHOLOGY II
                            <option>PY-112	GROUP DYNAMICS
                            <option>PY-114	PHYSIOLOGICAL PSYCHOLOGY
                            <option>PY-115	CURRENT ISSUES IN PSYCHOLOGY
                            <option>PY-116	HUMAN RESOURCE MANAGEMENT
                            <option>PY-117	SIKOLOHIYANG FILIPINO FILIPINO PSYCHOLOGY
                            <option>PY-118	FAMILY PSYCHOLOGY
                            <option>PY-119	INTRODUCTION TO FORENSIC PSYCHOLOGY
                            <option>PY-120	BASIC PSYCHOTHERAPEUTIC INTERVENTIONS
                            <option>PY-121 	PSYCHOLOGY ELECTIVE 1: INDUSTRIAL PSYCHOLOGY
                            <option>PY-122	PSYCHOLOGY ELECTIVE 2: GROUP DYNAMICS
                            <option>PY-123	PSYCHOLOGY ELECTIVE 3: FILIPINO PSYCHOLOGY
                            <option>PY-127	ENVIRONMENTAL PSYCHOLOGY
                            <option>PY-128	POSITIVE PSYCHOLOGY
                            <option>PY-221.5	
                            <option>S-101	GENERAL CHEMISTRY LECTURE
                            <option>S-102	GENERAL BOTANY
                            <option>S-103	GENERAL ZOOLOGY LECTURE
                            <option>S-104	GENERAL BIOLOGY LECTURE
                            <option>S-105	PHYSICAL SCIENCES
                            <option>S-106	BIOLOGICAL SCIENCES
                            <option>S-107	COMPARATIVE VERTEBRATE ANATOMY LECTURE
                            <option>S-108	PHYSICS LECTURE
                            <option>S-109	ORGANIC CHEMISTRY LECTURE
                            <option>S-110	BIOCHEMISTRY
                            <option>S-111	GENERAL BIOLOGY 2
                            <option>S-112	ANALYTICAL CHEMISTRY
                            <option>S-113	FUNDAMENTALS OF ECOLOGY LECTURE
                            <option>S-114 	STATISTICS FOR BIOLOGY
                            <option>S-115	GENERAL MICROBIOLOGY
                            <option>S-116	GENERAL PHYSICS 1 LABORATORY
                            <option>S-117	ELEMENTARY GENETICS
                            <option>S-118	PLANT MORPHOANATOMY
                            <option>S-119	BIOLOGY ELECTIVE 1
                            <option>S-122 	ANIMAL MORPHOANATOMY
                            <option>S-123	BIOLOGY ELECTIVE 2
                            <option>S-124	SEMINAR (SPECIAL TOPICS)
                            <option>SO-48	SOCIOLOGY OF DEVELOPING AREAS
                            <option>SO-101	INTRODUCTION TO SOCIOLOGY
                            <option>SP-101	ELEMENTARY SPANISH
                            <option>SP-102	INTERMEDIATE SPANISH
                            <option>SP-103	ADVANCE SPANISH
                            <option>SW-101	INTRODUCTION TO SOCIAL WORK
                            <option>SW-102	ETHICS OF SOCIAL WORK
                            <option>SW-103	SOCIAL WORK AND THE FILIPINO BEHAVIOR AND CULTURE
                            <option>SW-104	SOCIAL REALITIES IN A CHANGING WORLD
                            <option>SW-105	BEHAVIORAL DEVIATIONS AND SOCIAL WORK
                            <option>SW-106	SOCIAL WELFARE POLICY AND PROGRAMS AND SERVICES
                            <option>SW-106.1 SOCIAL WORK: GENDER AND SOCIETY
                            <option>SW-107	INTEGRATED CASEWORK MANAGEMENT AND COUNSELING
                            <option>SW-112	SOCIAL WELFARE MANAGEMENT AND ADMINISTRATION
                            <option>SW-113	ACTION RESEARCH AND ADVOCACY PROJECT I
                            <option>SW-113.1 DISASTER MANAGEMENT
                            <option>SW-114	INTRO TO COM. and SOC. DEV'T. IN RURAL and URBAN COM.
                            <option>SW-115	SOCIAL WORK PRACTICE
                            <option>SW-120	INTEGRATED SOCIAL ACTION RESEARCH REPORT
                            <option>SPED-101 FOUNDATIONS OF SPECIAL EDUCATION
                            <option>SPED-102 CURRICULUM PROGRAMMING IN SPECIAL EDUCATION
                            <option>T-101	BIBLICAL FOUNDATION OF CHRISTIAN FAITH
                            <option>T-102	COMMUNITY AND CELEBRATION
                            <option>T-102.1	THEOLOGY OF MISSION COMMUNION AND SERVICE
                            <option>T-103	CONTEMPORARY MORAL ISSUES
                            <option>T-104	THEOLOGY OF SOCIAL JUSTICE AND PEACE
                            <option>TAX-101	BUSINESS TAXATION
                            <option>TAX-102	INCOME TAXATION
                            <option>TAX-103 BUSINESS AND TRANSFER TAXES
						  </select>
						</div>
					  </div>                      
 
                      <div class="form-group">
						<label for="purpose" class="col-sm-4 control-label">Purpose/Activity</label>
						<div class="col-sm-8">
						  <select name="purpose" class="form-control"required  >
							<option></option>
                              <option>Conference</option>
                              <option>Debate</option>
                              <option>Film showing</option>
                              <option>Forum</option>
                              <option>Group Presentation</option>
                              <option>Lecture</option>
                              <option>Meeting</option>
                              <option>Orientation</option>
                              <option>Play</option>
                              <option>Reporting</option>
                              <option>Seminar</option>
                              <option>Talk</option>
                              <option>Thesis Defense</option>
                              <option>Workshop</option>
						  </select>
						</div>
					  </div>                         
                        
					  <div class="form-group">
						<label for="submit" class="col-sm-4 control-label"></label>
						<div class="col-sm-8">
						  <button type="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-save"></i> Submit</button>
						</div>
					  </div>
                        
					</form>
					
						<?php 
						//include('include/database.php');
						include('connect.php');
						if (isset($_POST['submit'])){
                            if ($_POST['submit']=='selection'){
                                
                            }
                            else {

                                $time_activity=$_POST['time_activity'];
                                $equipment=$_POST['equipment'];

                                $name=$_POST['name'];
                                $idnumber=$_POST['idnumber'];

                                $contact=$_POST['contact'];
                                $subject=$_POST['subject'];	    
                                $purpose=$_POST['purpose'];	    

                                $date_submitted = date('Y-m-d H:i:s');	
                                $date1 = strtr($_POST['date_reservation'], '/', '-');
                                $date_reservation = date('Y-m-d', strtotime($date1));

                                {
                                $sLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                $sql = "INSERT INTO equipmentnew_schedule (equipment,date_reservation,time_reservation,purpose,date_submitted,name,id_number,contact,subject) VALUES ('$equipment','$date_reservation','$time_activity','$purpose','$date_submitted','$name','$idnumber','$contact','$subject')";
                                $sLink->exec($sql);
                                
                                //mysql_query ("INSERT INTO equipmentnew_schedule (equipment,date_reservation,time_reservation,purpose,date_submitted,name,id_number,contact,subject) VALUES ('$equipment','$date_reservation','$time_activity','$purpose','$date_submitted','$name','$idnumber','$contact','$subject')") or die(mysql_error());

                                }
                                echo "<script>alert('Equipment reservation successfully added!'); window.location='list_of_equipment_reservation.php'</script>";

                                }

                        }
          
						?>
	  
      </div>
	  
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>