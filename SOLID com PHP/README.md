## SOLID com PHP

#### Sintomas de um código doente


- Ausencia de teste ou pouca cobertura
- Classes grandes
- Complexo de mais (complexidde ciclomática)
- Falta de padrão de escrita
- Não ser SOLIDo


#### 1 - Open closed principle

Aberto para expansão, fechado para modificação
Uma classe não deve depender de outra! As possíveis soluções:
- Usar interfaces e Classes abastratas para definir um tipo
- Padrão de projeto Strategy (Interface)
- Padrão de projeto Template Method (Abstract)


#### 2 - Single responsability principle
Responsabilidade única
Um Objeto jamais deve ter mais de um fim ou proposito.
Ex.: Um objeto não deve armazenar registros e imprimir o resultado ou salvar estes dados.


#### 3 - Dependency Invertion principle
- Dependa de uma abstração e não de uma implementação;
    Implementações criam dependencias muito maiores do que uma abstração.
- Módulos de alto nível não deveriam depender de módulos de baixo nível, ambos deveriam depender de abstrações.
- Abstrações não deveriam depender de detalhes. Detalhes devem depender de abstrações.


#### 4 - Liskov Substitution (Barbara Liskov)
Um quadrado é um tipo de retângulo, mas não pode ser substituido pelo retângulo, ele quebra o princípio de liskov.


#### 5 - Interface Segregation
Nenhum cliente deve ser forçado a depender de métodos que ele não use.
Podemos e devemos criar interfaces menores e mais simples, mesmo que com métodos duplicados.


#### A Sigla
Single Responsability Principle (SRP) - Atores e estruturas de alto nível
Open/closed Principle (OCP) - Projeto de classes e extensão de funcionalidade
Liskov Substitution Principle (LSP) - Subtipos e heranças
Interface Segregation Principle (ISP) - Lógica de negócios relacionada a comunicação com classes cliente
Dependency Inversion Principle (DIP) - Dependencias das classes
