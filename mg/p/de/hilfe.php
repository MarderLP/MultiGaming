<ul class="sites">
	<li></li>
	<li><b>Adresszeilenkomandos</b>
		<ul>
			<li>Im Folgenden sind alle unterst&uuml;tzten Eingaben gelistet, auf die die Startseite zur&uuml;ck greift. Darauf folgen ein paar Beispiele.></li>
			<li><u>Streams</u>
				<ul>
					<li>twitch - Liste f&uuml;r twitch Streams</li>
					<li>hitbox - Liste f&uuml;r hitbox Streams</li>
					<li>hier kann eine durch Kommata getrennte Liste an Streams angegeben werden, die zus&auml;tzlich angezeigt werden sollen. Duplikate werden ignoriert!</li>
				</ul>
			</li>
			<li><u>Tab</u>
				<ul>
					<li>Beim Aufruf der Seite wird automatisch folgender Reiter gew&uuml;hlt, die Sprache muss aber auf jeden Fall auf Deutsch gestellt werden!:</li>
					<li>p=start - Startseite (oder p ungesetzt lassen)</li>
					<li>p=streams - Streams</li>
					<li>p=impressum - Impressum</li>
					<li>p=hilfe - Hilfe</li>
					<li>p=changelog - Changelog</li>
				</ul>
			</li>
			<li><u>Sprache</u>
				<ul>
					<li>Es stehen folgende Sprachen zur Auswahl, wobei Englisch standart ist:</li>
					<li>lang=de - Deutsch</li>
					<li>lang=en - Englisch</li>
				</ul>
			</li>
			<li><u>Team und Empfehlungen</u>
				<ul>
					<li>team - Parameter f&uuml;r MgN Streams</li>
					<li>suggestions - Parameter f&uuml;r weitere Empfehlungen</li>
					<li>Sobald team=on oder suggestions=on ist, werden die Streams der MgN bzw. Empfehlungen im Streams Tab angezeigt. Dies hat auf den Tab MgN keinen Einfluss, dort werden immer die MgN Tabs angezeigt.</li>
				</ul>
			</li>
			<li><u>Beispiele</u>
				<ul>
					<li>?hitbox=user,user2&amp;twitch=user3,user4&amp;p=streams - Die Reihenfolge ist egal, wichtig ist, dass am Anfang der Eingabe einmal ein <i>?</i> steht und die verschiedenen Parameter durch ein &amp; verbunden sind.</li>
				</ul>
			</li>
		</ul>
	</li>
	<li></li>
	<li><b>Seite einbetten</b>
		<ul>
			<li>Wenn du Multistream auf deiner Seite einbetten willst, kannst du das wie folgt machen:</li>
			<li>Dabei sind {twitchstreams} und {hitboxstreams} durch Kommata getrennte Listen wie oben bei den Adresszeilenkommandos</li>
			<li><u>Streams</u>
				<code>
					&lt;iframe src=&quot;http://stream.my-mgn.de/mg/p/showStreams.php?twitch={twitchstreams}&amp;hitbox={hitboxstreams}&quot; name=&quot;mgnmultistream&quot; width=&quot;500&quot; height=&quot;400&quot;&gt;&lt;/iframe&gt;
				</code>
			</li>
			<li><u>Chat</u>
				<code>
					&lt;iframe src=&quot;http://stream.my-mgn.de/mg/p/popoutChat.php?twitch={twitchstreams}&amp;hitbox={hitboxstreams}&quot; name=&quot;mgnmultistream&quot; width=&quot;500&quot; height=&quot;400&quot;&gt;&lt;/iframe&gt;
				</code>
			</li>
		</ul>
	</li>
</ul>