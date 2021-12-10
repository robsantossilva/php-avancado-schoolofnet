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


#### Decorator
Problema: Dinamicamente, agregar responsabilidades adicionais a um objeto. Os Decorators fornecem uma alternativa flexível ao uso de subclasses para extensão de funcionalidades.
##### Aplicabilidade
- Para acrescentar responsabilidades a objetos individuais de forma dinâmica e transparente, ou seja, sem afetar outros objetos;
- Para responsabilidades que podem ser removidas;
- Quando a extensão através do uso de subclasses não é prática. Às vezes, um grande número de extensões independentes é possivel e isso poderia produzir uma explosão de subclasses para suportar cada combinação. Ou a definição de uma classe pode estar oculta ou não estar disponível para a utilização de subclasses.

#### Façade
Fornecer uma interface unificada para um conjunto de interfaces em um subsistema.
Façade define uma interface de nível mais alto que torna o subsistema mais fácil de ser usado
##### Aplicabilidade
- Quando você desejar fornecer uma interface simples para um subsistema complexo. Os subsistemas se  tornam mais complexos à medida que evoluem. A maioria dos padrões, quando aplicados, resulta em mais e menores classes. Isso torna o subsistema mais reutilizavel e mais fácil de customizar, porém, também se torna mais dificil de usar para clientes que não precisam customizá-lo. Uma fachama pode fornecer, por comportamento-padrão, uma visão simples do sistema, que é boa o suficiente para a maioria dos clientes. Somente os clientes que demandarem maior customização necessitarão olhar além da fachada;
- Quando existirem muitas dependencias entre clientes e classes de implementação de uma abstração. Ao introduzir uma fachada para desacoplar o subsistema dos clientes e de outros subsistemas, estar-se-á promovendo a independencia e portabilidade dos subsistemas

#### Flyweight
Problema: Usar compartilhamento para suportar eficientemente grandes quantidades de objetos de granularidade fina.
##### Aplicabilidade
A eficiencia do padrão Flyweight depende muito de como e onde ele é usado. Aplique o padrão Flyweight quando todas as condições a seguir forem verdadeiras:
- Quando uma aplicação utiliza um grande númeto de objetos;
- Quando os custos de armazenamento são altos por causa da grande quantidade de objetos;
- Quando a maioria dos estados de objetos pode ser tornada extrinseca;
- Quando muitos grupos de objetos podem ser substituidos por relativamente poucos objetos compartilhados, uma vez que estados extrinsecos são removidos;
- Quando a aplicação não depende da identidade dos objetos. Uma vez que objetos Flyweight podem ser compartilhados, testes de identidade produzirão o valor verdadeiro para objetos conceitualmente distintos.


#### Proxy
Problema: Fornecer um substituto (surrogate) ou marcador da localização de outro objeto para controlar acesso a esse objeto.
##### Aplicabilidade
- Um virtual proxy cria objetos caros sob demanda.
- Um protection proxy controla o acesso ao objeto original. Os proxies de proteção são úteis quando os objetos devem ter diferentes direitos de acesso.
- Um smart reference é um substituto para um simples pointer que executa ações adicionais quando um objeto é acessado. Usos típicos incluem:
  - Contar o número de referencias para o objeto real, de modo que o mesmo possa ser liberado automaticamente quando não houver mais referencias
  - Carregar um objeto persistente para a memória quando ele for referenciado pela primeira vez;
  - Verificar se o objeto está bloqueado antes de ser acessado, para assegurar que nenhuma outro objeto possa mudá-lo.