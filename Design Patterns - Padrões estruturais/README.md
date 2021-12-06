#### Adapter
Problema: Converter a interface de uma classe em outra interface, esperada pelos clientes. O Adapter permite que classes com interfaces incompativeis trabalhem em conjunto, o que, de outra forma, seria impossivel.

##### Aplicabilidade
- Quando você quiser usar uma classe existente, mas sua interface não corresponde à interface de que necessita;
- Quando você criar uma classe reutilizável que coopera com classes não-relacionadas ou não-previstas, ou seja, classes que não necessariamente tenham interfaces compativeis;
- (somente para adaptadores de objetos) Quando você precisar usar várias subclasses existentes, porém, for impraticavel adaptar essas interfaces criando subclasses para cada uma. Um adaptador de objeto pode adaptar a interface da sua classe-mãe.


#### Bridge
Problema: Desacoplar uma abstração da sua implementação, de modo que as duas possam variar independentemente.
##### Aplicabilidade
- Quando desejar evitar um vínculo permanente entre uma abstração e sua implementação. Isso pode ocorrer, por exemplo, quando a implementação deve ser selecionada ou alterada em tempo de execução;
- Quando, tanto as abstrações como suas implementações tiverem de ser extensíveis por meio de subclasses. Neste caso, o padrão Bridge permite combinar as diferentes abstrações e implementações e estende-las independentemente;
- Quando mudanças na implementação de uma abstração não puderem ter impacto sobre os clientes; ou seja, quando o código dos mesmos não puser ser recompilado.
- (C++) Quando você desejar ocultar completamente a implementação de uma abstração dos clientes. Em C++, a representação de uma classe é visível na interface da classe;
- Quando desejar compartilhar uma implementação entre múltiplos objetos (talvez usando a contagem de referencia) e este fato deve estar oculto do cliente.

#### Composite
Problema: Compor objetos em estruturas de árvore para representarem hierarquias partes-todo.
Composite permite aos clientes tratarem de maneira unforme objetos individuais e composições de objetos.
##### Aplicabilidade
- Quando quiser representar hierarquias partes-todo de objetos;
- Quando quiser que os clientes sejam capazes de ignorar a diferença entre composições de objetos e objetos individuais. Os clientes tratarão todos os objetos na estrutura composta de maneira uniforme.