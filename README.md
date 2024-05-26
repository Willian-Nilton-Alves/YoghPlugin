# YoghPlugin
Yogh Plugin

Documentação técnica do que foi feito:
O plugin "Client Customization" foi modificado para exibir uma mensagem personalizada apenas em postagens e não em páginas. Isso foi alcançado adicionando uma verificação utilizando a função is_single() para determinar se o conteúdo está sendo exibido em uma postagem. Se for o caso, a mensagem personalizada é adicionada ao conteúdo.

Documentação não técnica do que foi feito:
O plugin foi ajustado para mostrar uma mensagem especial somente em postagens, excluindo as páginas. Isso significa que agora, quando os visitantes visualizam uma postagem no site, eles verão uma mensagem indicando o nome e o link do site responsável pelo conteúdo.

Tempo total despendido na tarefa:
O tempo total gasto na modificação do plugin foi de aproximadamente 2 horas.

Apontar referências utilizadas:
As referências utilizadas foram a documentação oficial do WordPress sobre a função is_single() e a função add_filter().
