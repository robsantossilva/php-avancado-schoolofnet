## Design Patterns - Padrões de criação

#### The Gang of Four (GOF)

- Erich Gama
- Richard Helm
- Ralph Johnson
- Josh Vlissides

"Padrões de projetos - Soluções reutilizáveis de software orientado a objetos." - Livro

#### Padrões de criação (5) 
- Abstact Factory 
- Builder 
- Factory Method 
- Prototype 
- Singleton


#### Abstact Factory
Problema:
Criação de conjunto de objetos relacionados ou dependentes sem especificar suas classes concretas.
O cliente da fábrica de abstração não precisa se preocupar como estes objetos são criados, ele só sabe obtê-los

##### Aplicabilidade
Use quando:
- Um sistema deve ser independente de como seus produtos são criados, compostos ou representados;
- Um sistema deve ser configurado como um produto de uma familia de multiplos produtos;
- Uma família de objetos-produto for projetada para ser usada em conjunto, e você necessita garantir esta restrição;
- Você quer fornecer uma biblioteca de calsses de produtos e quer revelar somente suas interfaces, não suas implementações.

####  Builder
Problema
Separar a construção de um objeto complexo da sua representação de modo que o mesmo processo de construção possa criar diferentes representações.

##### Aplicabilidade
- O algoritmo para criação de um objeto complexo deve ser independente das partes que compõem o objeto e de como elas são montadas.
- O processo de construção deve permitir diferentes representações para o objeto que é construído.

#### Factory Method
Problema: Definir uma interface para criar um objeto, mas deixar as subclasses decidirem que classe instanciar.
O Factory Method permite adiar a instanciação para subclasses.
##### Aplicabilidade
- Uma classe não pode antecipar a classe de objetos que deve criar
- Uma classe quer que suas subclasses especifiquem os objetos que criam
- Classes delegam responsabilidade para uma dentre várias subclasses auxiliares, e você quer localizar o conhecimento de qual subclasse auxiliar que é a delegada.


#### Prototype
Problema: Especificar os tipos de objetos a serem criados usando uma instância-protótipo e criar novos objetos pela cópia desse protótipo
##### Aplicabilidade
- Quando as classes a instanciar forem especificadas em tempo de execução, por exemplo, por carga dinâmica;
- Para evitar a construção de uma hierarquia de classes de fábricas paralela à hierarquia de classes de produto;
- Quando as instancias de uma classe puderem ter uma dentre poucas combinações diferentes de estados. Pode ser mais conveniente instalar um número correspondente de protótipos e clonálos, ao invés de instanciar a classe manualmente, cada vez com um estado apropriado.

#### Singleton
Problema: Garantir que uma classe tenha somente uma instancia e fornecer um ponto global de acesso para a mesma.
##### Aplicabilidade
- Quando for preciso haver apenas uma instancia de uma classe, e essa instancia tiver que dar acesso aos clientes através de um ponto bem conhecido
- Quando a única instancia tiver de ser extensivel através de subclasses, possibilitando aos clientes usarem uma instancia estendida sem alterar o seu código.