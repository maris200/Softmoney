<?php
  /*
	|| #################################################################### ||
	|| #                             ArrowChat                            # ||
	|| # ---------------------------------------------------------------- # ||
	|| #    Copyright ©2010-2012 ArrowSuites LLC. All Rights Reserved.    # ||
	|| # This file may not be redistributed in whole or significant part. # ||
	|| # ---------------- ARROWCHAT IS NOT FREE SOFTWARE ---------------- # ||
	|| #   http://www.arrowchat.com | http://www.arrowchat.com/license/   # ||
	|| #################################################################### ||
	*/
	$language = array();
	// ########################### STATUS #############################
	$language[1]			=	"Disponível";								// Available users
	$language[2]			=	"Ocupado";										// Busy users
	$language[3]			=	"Invisível";								// Invisible users
	$status['available']	=	"Estou disponível";							// Default available status message
	$status['busy']			=	"Estou ocupado";									// Default busy status message
	$status['away']			=	"Estou ausente";									// Default idle status message
	$status['offline']		=	"Estou offline";								// Default offline status message
	$status['invisible']	=	"Estou offline";								// Default invisible status message
	$language[83]			=	"Visitante";									// Displayed if the user has no username
	// ####################### SERVICE UPDATES ########################
	$language[27]			=	"O chat está fechado para manutenção";  // Hover message when chat is in maintenance mode
	$language[28]			=	"fechar"; 									// Close the announcement message
	$language[58]			=	"Você precisa se registrar ou se logar para usar o chat";	// The message that guests view when logged out
	// ######################## NOTIFICATIONS #########################
	$language[0]			=	"Notificações"; 							// Displayed in the title bar of the notifications popup
	$language[9]   			=   "Não há nenhuma nova notificação"; 			// Displayed when a user has no new notifications
	$language[21]			=	"Ver todoas notificações"; 					// The tooltip to see all notifications
	$language[71]			=	"segundo atrás";								// Displayed after the time in notifications (second)
	$language[72]			=	"segundos atrás";								// Displayed after the time in notifications (seconds)
	$language[73]			=	"minuto atrás";								// Displayed after the time in notifications (minute)
	$language[74]			=	"minuto atrás";								// Displayed after the time in notifications (minutes)
	$language[75]			=	"hora atrás";									// Displayed after the time in notifications (hour)
	$language[76]			=	"horas atrás";								// Displayed after the time in notifications (hours)
	$language[77]			=	"dia atrás";									// Displayed after the time in notifications (day)
	$language[78]			=	"dias atrás";									// Displayed after the time in notifications (days)
	$language[79]			=	"mês atrás";								// Displayed after the time in notifications (month)
	$language[80]			=	"meses atrás";								// Displayed after the time in notifications (months)
	$language[81]			=	"ano atrás";									// Displayed after the time in notifications (year)
	$language[82]			=	"anos atrás";								// Displayed after the time in notifications (years)
	// ######################### BUDDY LIST ###########################
	$language[4]			=	"Chat"; 									// Displayed in the title bar of the buddy list popup
	$language[7]			=	"Chat (Offline)"; 							// Displayed in the buddy list tab when offline
	$language[8]    		=   "Ninguém disponível no chat"; 			// Displayed with no one is online
	$language[12]   		=   "Busca"; 									// Displayed in the search text area of the buddy list
	$language[22]			=	"Status";									// Button to show status options in the buddy list
	$language[23]			=	"Opções";									// Button to show options in the buddy list
	$language[25]			=	"Carregando...";								// Text to show while the buddy list is loading
	$language[26]			=	"Nenhum amigo encontrado.";						// Displayed when no friends are found after searching
	$language[119]			=	"Digite o nome para usar no chat";				// Displayed in the guest username box
	$language[120]			=	"Você precisa digitar um nome..";					// Error message when the user enters no guest name
	$language[121]			=	"O nome deve conter apenas letras e números.";	// Error message when the user enters a guest name with more than letter/numbers
	$language[122]			=	"Existem palavras bloqueadas em seu nome: ";	// DISPLAYS BLOCKED WORD AFTER - Error message when the user enters a blocked word guest name
	$language[123]			=	"Você não pode muadr seu nome.";		// Error message when user trys to change guest name again
	$language[124]			=	"Esse nome já está sendo usado.";				// Error message when duplicate guest name is selected
	$language[125]			=	"O nome não pode conter mais que 25 caracteres.";// Error message when guest name is too long
	// ########################### OPTIONS ############################
	$language[5]			=	"Disponível para bate-papo";						// Option to go offline text
	$language[6]			=	"Sons do chat";								// Option to play sound for new messages text
	$language[17]   		=   "Manter lista aberta";							// Option to keep the buddy list open text
	$language[18]   		=   "Mostrar apenas nomes";							// Option to hide avatars in the buddy list text
	$language[29]			=	"Tema:";									// Text to display next to the theme change select box
	$language[95]			=	"Gerenciar lista negra...";						// Option to manage the block list
	$language[96]			=	"Selecione quem você quer desbloquear";		// Text to display when a user is managing the block list
	$language[97]			=	"Desbloquear";									// Text to display on unblock button
	$language[108]			=	"Selecione o tema que deseja usar";			// Text to display when a user is choosing a theme
	$language[109]			=	"Escolha";									// Text to display on the choose theme button
	$language[118]			=	"Selecione";									// Text to display on the selection for the block menu
	// ######################## APPLICATIONS ##########################
	$language[16]  		 	=   "Aplicativos";								// Displayed in the title bar of the applications popup
	$language[20]			=	"Favoritos";								// Displayed in the applications popup for the user's bookmarked applications
	$language[64]			=	"Outros Aplicativos";						// Displayed under bookmarks (non-bookmarks heading)
	$language[65]			=	"Arraste para gravar";							// Drag to reorder text
	$language[104]			=	"Manter aplicativo aberto";							// Displayed in the menu to keep an app window open
	$language[105]			=	"Sempre carregar aplicativo";							// Displayed in the menu to load the app when the bar loads
	// ######################### HIDE CHAT ############################
	$language[14]   		=   "Esconder Chat";								// Displayed when the user hovers over the hide chat button
	$language[15]   		=   "Mostrar Chat";								// Displayed when the user hovers over the show chat button
	// ######################## POPOUT CHAT ############################
	$language[10]   		=   "Abrir chat em nova janela";								// Option to pop out chat
	$language[11]   		=   "Abrir Chat na mesma janela";								// Option to pop in chat
	// ############################ CHAT ###############################
	$language[13]  	 		=   "Este usuário está offline e receberá sua mensagem quando logar.";		// DISPLAYS USERNAME FIRST - Shown when a message is sent to an offline user
	$language[24]			=	"Limpar conversa";													// Displayed in the chat popup to clear chat history
	$language[30]			=	"Nova mensagem de";														// DISPLAYS USERNAME AFTER - Blinks in the title of the browser on new messages
	$language[59]			=	"Mais &#9660;";															// The text to display more chat options
	$language[60]			=	"Inciar chamada de vídeo";															// The video chat option in the more menu
	$language[61]			=	"Acabei de lhe enviar uma chamada de vídeo. Ignore essa mensagem para recusar a chamada.";// The message to send when a video chat is reuqested
	$language[62]			=	"Aceitar";																// Accept a video chat request
	$language[63]			=	"Seu pedido de chamada de vídeo foi enviado.";								// Displayed when a user sends a video chat request
	$language[66]			=	"Enviar arquivo...";														// The file transfer option in the more menu
	$language[67]			=	"cancelar o envio";														// The link to cancel the file transfer
	$language[68]			=	"Seu arquivo foi enviado.";								// Displayed when a user sends a file
	$language[69]			=	"Acabei de lhe enviar um arquivo. Ignore essa mensagem para recusar.";				// The message to send when a file is sent
	$language[70]			=	"Baixar o arquivo";														// Download a file that was sent
	$language[84]			=	"Bloquear usuário";															// Blocks a user
	$language[85]			=	"Quer também quer reportar esse usuário?";								// Asks the user if they want to report another user
	$language[86]			=	"Buscar";																// The text to browse for a file when uploading
	$language[87]			=	"Aperte Buscar para enviar um arquivo ou ";										// Text to display when uploading a file
	$language[88]			=	"Abrir todas conversas em novas janelas";										// Displays when mouseover the popout chat icon
	$language[89]			=	"Fechar chat";															// Displays when mouserver the close icon
	$language[90]			=	"Você";																	// Displays on mosueover of your own chat text
	$language[102]			=	"Mensagem não enviada. Este usuário bloqueou você.";						// Displays this when a user tries to send a message to another user who has them blocked
	$language[103]			=	"Este usuário foi bloqueado. Mensagem desse usuário não serão mais recebidas."; // Displays when a user is blocked
	// ######################### CHAT ROOMS #############################
	$language[19]			=	"Salas de Chat";								// Displayed in the chatrooms popup and tab
	$language[31]			=	"Criar";									// Button to show create chatroom
	$language[32]			=	"Opções";									// Button to show chatroom options
	$language[33]			=	"Sair";									// Button to show leave chatroom
	$language[34]			=	"Carregando...";								// Text so show while the chatroom list is loading
	$language[35]			=	" Online";									// DISPLAYS ONLINE COUNT FIRST - Shown after online count in list
	$language[37]			=	"Criar nova sala de chat:";					// Text to display in the create chatroom popup
	$language[36]   		=   "Manter sala aberta";							// Option to keep the chatroom window open
	$language[47]			=	"Ficar na sala";								// Option to stay in the chatroom without the window open on page load
	$language[38]			=	"Bloquear chats privados";						// Option to block private chats from users in the chatroom
	$language[39]			=	"Você precisa aguardar algum tempo antes de abrir uma nova sala.";	// Error to show when the chatroom flood limit is reached
	$language[40]			=	"Criação de salas por usuáros está temporariamente indisponível.";				// Error to show when user chatrooms are disabled
	$language[41]			=	"Mensagem privada";							// Send user a private messages
	$language[42]			=	"Ver perfil";							// Visit the user's profile
	$language[43]			=	"Visitante";									// The user's title in the chatroom - shown when the user is a guest
	$language[44]			=	"Moderador";								// The user's title in the chatroom - shown when the user is a moderator
	$language[45]			=	"Administrador";							// The user's title in the chatroom - shown when the user is an administrator
	$language[46]			= 	"Este usuário desabilitou mensagens privadas"; // The text that the alert box will display when a user trys to PM with blocked chat
	$language[48]			=	"Essa sala não existe.";			// Displayed when a user trys to enter an invalid chatroom
	$language[49]			=	"A senha está incorreta. Favor tentar novamente.";		// Displayed when a user enters the wrong password
	$language[50]			=	"Digite a senha para entrar na sala.";						// Text to display when entering the chatroom password
	$language[51]			=	"Limite atingido: Você precisa aguardar um tempo para enviar outra mensagem.";	// Error to show when flood limit is reached
	$language[52]			=	"Fazer moderador";							// Make the user a moderator
	$language[54]			=	"Remover moderador";							// Remove the user from being a moderator
	$language[53]			=	"Banir usuário";									// Ban/Kick the user from the chatroom
	$language[55]			=	"Você foi banido permanentemente dessa sala.";					// Shown when a user is permanently banned
	$language[56]			=	"Você está banido dessa sala por alguns minutos: ";		// DISPLAYS MINUTES AFTER - shown when a user is kicked
	$language[57]			=	"Digite o número em minutos que o usuário deve permanecer banido. Digite 0 para banir permanentemente.";	// Message to show when banning a user.  Typing 0 will permanently ban the user
	$language[91]			=	"Defina o nome da sala que você gostaria de criar";		// Message to display when creating a chat room
	$language[92]			=	"Sair da sala";							// Tooltip when mousover the leave chat room icon
	$language[93]			=	"Criar nova sala de chat";					// Tooltip when mouseover the create chat room icon
	$language[94]			=	"Mudar o tema do chat";					// Tooltip when mouseover the change theme icon
	$language[98]			=	"Nome";										// Placeholder for the create chatroom name box
	$language[99]			=	"Senha (Opcional)";						// Placeholder for the create chatroom password box
	$language[100]			=	"Juntar-se";										// Displayed on UI buttons to join a chat room
	$language[101]			=	"Sons da sala de chat";							// The option to enable/disable chat room sounds
	$language[106]			=	" foi feito moderador por ";			// DISPLAYS USERNAME FIRST/MODERATOR AFTER - Shown after a user is made a moderator
	$language[107]			=	" foi tirado da sala por ";	// DISPLAYS USERNAME FIRST/MODERATOR AFTER - Shown after a user is kicked
	$language[117]			=	"Popout a sala de chat";							// Option to pop out the chat room
	
	// ######################### MOBILE CHAT #############################
	$language[110]			=	"Chat Móvel";			// Displays in the header of the mobile chat
	$language[111]			=	"Usuários Online";			// Displays in the header for the online user list
	$language[112]			=	"Usuários Ausentes";			// Displays in the header for the idle user list
	$language[113]			=	"Voltar";					// Displays on the back button when viewing a chat
	$language[114]			=	"Enviar";					// Text for the send button
	$language[115]			=	"Novo";					// Text to display when a new message is received
	$language[116]			=	"Você deve fazer o login para user o chat de um celular";	// Text to display when user is not logged in using mobile
?>