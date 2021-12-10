#### Chains of Responsibility
Problema: Evitar o acoplamento do remetente de uma solicitação ao seu receptor, ao dar mais de um objeto a oportunidade de tratar a solicitação. Encadear os objetos receptores, passando a solicitação ao longo da cadeia até que um objeto a trate.
##### Aplicabilidade
Muito utilizado em middleware
- Quando mais de um objeto pode tratar uma solicitação e o objeto que a tratará não é conhecido a priori. O objeto que trata a solicitação deve ser escolhido automaticamente;
- Quando você quer emitir uma solicitação para um dentre vários objetos, sem especificar explicitamente o receptor;
- Quando o conjunto de objetos que pode tratar uma solicitação deveria ser especificado dinamicamente.

#### Command
Problema: Encapsular uma solicitação como um objeto, desta forma permitindo parametrizar clientes com diferentes solicitações, enfileirar ou fazer o registro (log) de solicitações e suportar operações que podem ser desfeitas.
##### Aplicabilidade
- Parametrizar objeyos por uma ação a ser executada. Você pode expressar tal parametrização numa linguagem procedural através de uma função callback, opu seja, uma função que é registrada em algum lugar para ser chamada em um momento mais adiante. Os commands são uma substituição orientada a objetos para callbacks.
- Especificar, enfileirar e executarsolicitações em tempos diferentes. Um objeto Command pode ter um tempo de vida independente da solicitação original. Se o receptor de uma solicitação pode ser representado de uma maneira independente do espaço de endereçamento, então você pode transferir um objeto command para a solicitação para um processo diferente e lá atender a solicitação;
- Suportar desfazer operações. A operação Execute, de Command, pode armazenar estados para reverter seus efeitos no próprio comando. A interface de Command deve ter acrescentado uma operação Unexecute, que reverte os efeitos de uma chamada anterior de Execute. Os comandos executados são armazenados em uma lista histórica. O nivel ilimitado de desfazer e refazer operações é obtido percorrendo esta lista para trás e para frente, chamando operações Unexecute e Execute, respectivamente;
- Suportar o registro (logging) de mudanças de maneira que possam ser reaplicadas no caso de uma queda de sistema. Ao aumentar a interface de Command com as operações carregar e armazenar, você pode manter um registro (log) persistente das mudanças. A recuperação de uma queda de sistema envolve a recarga dos comandos registrados a partir do disco e sua reexecução com a operação Execute.
- Estruturar um sistema em torno de operações de alto nível construídas sobre operações primitivas. Tal estrutura é comum em sistemas de informação que suportam **transações**. Uma transação encapsula um consjunto de mudanças nos dados. O padrão Command fornece uma maneira de modelar transações. Os Commands têm uma interface comum, permitindo invocar todas as transações da mesma maneira. O padrão também torna mais fácil estender o sistema com novas transações. 

#### Interpreter
Data uma linguagem, definir uma representação para a sua gramática juntamente com um interpretador que usa a representação para interpretar sentenças dessa linguagem.
##### Aplicabilidade
- Quando a gramática é simples. Para gramáticas complexas, a hierarquia de classe para a gramática se torna grande e incontrolável. Em tais casos, ferramentas tais como geradores de analisadores são uma alternativa melhor. Elas podem interpretar expressões sem a construção de árvores sintáticas abstratas, o que pode economizar espaço e, possivelmente, tempo;
- Quando a eficiência não é uma preocupação crítica, Os interpretadores mais eficientes normalmente não são implementados pela interpretação direta de árvores de análise sintática, mas pela sua tradução para uma outra forma. Por exemplo, expressões regulares são frequentemente transformadas em máquinas de estado. Porém, mesmo assim, o tradutor pode ser implmentado pelo padrão Interpreter, sendo o padrão, portanto, ainda aplicável.


#### Iterator
Problema: Fornecer um meio de acessar, sequencialmente, os elementos de um objeto agregado sem expor a sua representação subjacente.
##### Aplicabilidade
- Para acessar os conteúdos de uma objeto agregado sem expor a sua representação interna;
- Para suportar múltiplos percursos de objeto agregados;
- Para fornecer uma interface uniforme que percorra diferentes estruturas agregadas (ou seja, para suportar a iteração polimórfica).

#### Mediator
Problema: Definir um objeto que encapsula a forma como um conjunto de objetos interage. O Mediator promove o acoplamento fraco ao evitar que os objetos se refiram uns aos outros explicitamente e permite variar suas interações independentemente.
##### Aplicabilidade
- Quando um conjunto de onjetos se comunica de maneiras bem-definidas, porém complexas. As interdependencias resultantes são desestruturadas e dificeis de entender.
- Quando a reutilização de uma objeto é dificil porque ele referencia e se comunica com muitos outros objetos.
- Quando um comportamento que está distribuído entre várias classes deveria ser customizável, ou adaptável, sem excessida especialização em subclasses

#### Memento
Problema: Sem violar o encapsulamento, capturar e externalizar um estado interno de um objeto, de maniera que o objeto possa ser restaurado para esse estado mais tarde.
##### Aplicabilidade
- Quando um instantâneo de (alguma porção do) estado de um objeto deve ser salvo de maneira que possa ser restaurado para esse estado mais tarde;
- Quando uma interface direta, para obtenção do estado exporia detalhes de implementação e romperia o encapsulamento do objeto


#### Observer
Problema: Definir uma dependencia um para muitos entre objetos, de maneira que quando um objeto muda de estado todos os seus dependentes são notificados e atualizados automaticamente.
##### Aplicabilidade
- Quando uma abstração tem dois aspectos, um dependente do outro. Encapsulando esses aspectos em objetos separados, permite-se variá-los e reutilizá-los independentemente;
- Quando uma mudança em um objeto exige mudanças em outros, e você não sabe quantos objetos necessitam ser mudados;
- Quando um objeto deveria ser capaz de notificar outros objetos sem fazer hipóteses, ou usar informações, sobre quem são esses objetos. Em ouitras palavras, você não quer que esses objetos sejam fortemente acoplados.

#### State
Problema: Permite a um objeto alterar seu comportamento quando o seu estado interno muda. O objeto parecerá ter mudado sua classe.
##### Aplicabilidade
- Quando o comportamento de um objeto depende do seu estado e ele pode mudar seu comportamento em tempo de execução, dependendo desse estado;
- Quando operações têm comandos condicionais grandes, de várias alternativas, que dependem do estado do objeto. Esse estado é normalmente representado por uma ou mais constantes enumeradas. Frequentemente, várias operações conterão essa mesma estrutura condicional. O padrão State coloca cada ramo do comando adicional em uma classe separada. Isto lhe permite tratar o estado do objeto como um objeto propriamente dito, que pode variar independentemente de outros objetos.
  
