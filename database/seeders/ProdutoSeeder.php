<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produtos = [
            [
                'id' => 1,
                'nome_produto' => 'Pizza Margherita',
                'descricao' => 'Pizza tradicional italiana com molho de tomate, mussarela de búfala, manjericão fresco e azeite extra virgem',
                'preco' => 40,
                'fk_empresa' => 1,
                'categoria' => 'Pizzas',
                'url_imagem' => 'https://images.unsplash.com/photo-1513104890138-7c749659a591?q=80&w=800&auto=format&fit=crop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'nome_produto' => 'Pizza Pepperoni',
                'descricao' => 'Deliciosa pizza com generosa camada de pepperoni, mussarela e orégano',
                'preco' => 43,
                'fk_empresa' => 1,
                'categoria' => 'Pizzas',
                'url_imagem' => 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?q=80&w=800&auto=format&fit=crop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'nome_produto' => 'Pizza Quatro Queijos',
                'descricao' => 'Pizza especial com blend de quatro queijos selecionados: gorgonzola, provolone, parmesão e mussarela',
                'preco' => 46,
                'fk_empresa' => 1,
                'categoria' => 'Pizzas',
                'url_imagem' => 'https://images.unsplash.com/photo-1595854341625-f33ee10dbf94?q=80&w=800&auto=format&fit=crop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'nome_produto' => 'Pizza Portuguesa',
                'descricao' => 'Pizza com presunto, ovos, cebola, azeitona, ervilha, mussarela e orégano',
                'preco' => 44,
                'fk_empresa' => 1,
                'categoria' => 'Pizzas',
                'url_imagem' => 'https://images.unsplash.com/photo-1588315029754-2dd089d39a1a?q=80&w=800&auto=format&fit=crop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'nome_produto' => 'Pizza Vegetariana',
                'descricao' => 'Pizza leve e saborosa com abobrinha, berinjela, pimentão, cogumelos, tomate e mussarela',
                'preco' => 42,
                'fk_empresa' => 1,
                'categoria' => 'Pizzas',
                'url_imagem' => 'https://images.unsplash.com/photo-1564936281291-294551497d81?q=80&w=800&auto=format&fit=crop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'nome_produto' => 'Hambúrguer Clássico',
                'descricao' => 'Hambúrguer artesanal de 180g, queijo cheddar, alface, tomate, cebola roxa e molho especial no pão brioche',
                'preco' => 33,
                'fk_empresa' => 1,
                'categoria' => 'Hambúrgueres',
                'url_imagem' => 'https://images.unsplash.com/photo-1565299585323-38d6b0865b47?q=80&w=800&auto=format&fit=crop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'nome_produto' => 'Hambúrguer Gourmet',
                'descricao' => 'Hambúrguer de blend premium de 200g, queijo gouda, cebola caramelizada, rúcula e maionese defumada no pão australiano',
                'preco' => 39,
                'fk_empresa' => 1,
                'categoria' => 'Hambúrgueres',
                'url_imagem' => 'https://images.unsplash.com/photo-1568901346375-23c9450c58cd?q=80&w=800&auto=format&fit=crop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'nome_produto' => 'Hambúrguer com Bacon',
                'descricao' => 'Hambúrguer suculento de 180g, fatias crocantes de bacon, queijo cheddar, cebola crispy e molho barbecue no pão brioche',
                'preco' => 37,
                'fk_empresa' => 1,
                'categoria' => 'Hambúrgueres',
                'url_imagem' => 'https://images.unsplash.com/photo-1586190848861-99aa4a171e90?q=80&w=800&auto=format&fit=crop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 9,
                'nome_produto' => 'Hambúrguer Vegetariano',
                'descricao' => 'Hambúrguer de grão de bico e quinoa, queijo brie, alface, tomate, cebola caramelizada e molho de iogurte no pão integral',
                'preco' => 35,
                'fk_empresa' => 1,
                'categoria' => 'Hambúrgueres',
                'url_imagem' => 'https://images.unsplash.com/photo-1550547660-d9450f859349?q=80&w=800&auto=format&fit=crop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 10,
                'nome_produto' => 'Hambúrguer Duplo',
                'descricao' => 'Dois hambúrgueres de 130g cada, queijo cheddar duplo, cebola roxa, picles, alface e maionese da casa no pão brioche',
                'preco' => 43,
                'fk_empresa' => 1,
                'categoria' => 'Hambúrgueres',
                'url_imagem' => 'https://images.unsplash.com/photo-1603064752734-4c48eff53d05?q=80&w=800&auto=format&fit=crop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 11,
                'nome_produto' => 'Drinks Especiais',
                'descricao' => 'Drinks exclusivos criados pelo nosso bartender. Consulte as opções disponíveis.',
                'preco' => 26,
                'fk_empresa' => 1,
                'categoria' => 'Bebidas',
                'url_imagem' => 'https://images.unsplash.com/photo-1551024709-8f23befc6f87?q=80&w=800&auto=format&fit=crop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 12,
                'nome_produto' => 'Cerveja Artesanal',
                'descricao' => 'Seleção de cervejas artesanais locais. Long neck 355ml.',
                'preco' => 19,
                'fk_empresa' => 1,
                'categoria' => 'Bebidas',
                'url_imagem' => 'https://images.unsplash.com/photo-1595981267035-7b04ca84a82d?q=80&w=800&auto=format&fit=crop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 13,
                'nome_produto' => 'Café Especial',
                'descricao' => 'Café premium preparado com grãos selecionados. Servido com petit four.',
                'preco' => 10,
                'fk_empresa' => 1,
                'categoria' => 'Bebidas',
                'url_imagem' => 'https://images.unsplash.com/photo-1513558161293-cdaf765ed2fd?q=80&w=800&auto=format&fit=crop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 14,
                'nome_produto' => 'Coquetel de Frutas',
                'descricao' => 'Delicioso coquetel preparado com frutas frescas da estação e licor de sua escolha.',
                'preco' => 23,
                'fk_empresa' => 1,
                'categoria' => 'Bebidas',
                'url_imagem' => 'https://images.unsplash.com/photo-1544145945-f90425340c7e?q=80&w=800&auto=format&fit=crop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 15,
                'nome_produto' => 'Suco Natural',
                'descricao' => 'Sucos naturais feitos na hora. Opções: laranja, abacaxi, melancia, morango ou limão.',
                'preco' => 13,
                'fk_empresa' => 1,
                'categoria' => 'Bebidas',
                'url_imagem' => 'https://images.unsplash.com/photo-1622483767028-3f66f32aef97?q=80&w=800&auto=format&fit=crop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 16,
                'nome_produto' => 'Sorvete Gourmet',
                'descricao' => 'Sorvete artesanal em três sabores da casa com calda quente e farofa crocante.',
                'preco' => 19,
                'fk_empresa' => 1,
                'categoria' => 'Sobremesas',
                'url_imagem' => 'https://images.unsplash.com/photo-1551024601-bec78aea704b?q=80&w=800&auto=format&fit=crop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 17,
                'nome_produto' => 'Tiramisu Tradicional',
                'descricao' => 'Clássico italiano com camadas de biscoito champagne embebido em café, creme de mascarpone e cacau.',
                'preco' => 23,
                'fk_empresa' => 1,
                'categoria' => 'Sobremesas',
                'url_imagem' => 'https://images.unsplash.com/photo-1563805042-7684c019e1cb?q=80&w=800&auto=format&fit=crop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 18,
                'nome_produto' => 'Bolo de Chocolate',
                'descricao' => 'Bolo quente de chocolate meio amargo com recheio cremoso e calda especial. Acompanha uma bola de sorvete de creme.',
                'preco' => 20,
                'fk_empresa' => 1,
                'categoria' => 'Sobremesas',
                'url_imagem' => 'https://images.unsplash.com/photo-1464305795204-6f5bbfc7fb81?q=80&w=800&auto=format&fit=crop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 19,
                'nome_produto' => 'Pudim Caseiro',
                'descricao' => 'Tradicional pudim de leite condensado com calda de caramelo artesanal.',
                'preco' => 17,
                'fk_empresa' => 1,
                'categoria' => 'Sobremesas',
                'url_imagem' => 'https://images.unsplash.com/photo-1635321593217-40050ad13c74?q=80&w=800&auto=format&fit=crop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 20,
                'nome_produto' => 'Petit Gateau',
                'descricao' => 'Bolinho de chocolate com centro derretido, servido com sorvete de baunilha e frutas vermelhas.',
                'preco' => 24,
                'fk_empresa' => 1,
                'categoria' => 'Sobremesas',
                'url_imagem' => 'https://images.unsplash.com/photo-1551106652-a5bcf4b29ab6?q=80&w=800&auto=format&fit=crop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 21,
                'nome_produto' => 'Fettuccine al Funghi',
                'descricao' => 'Massa fresca com molho cremoso de cogumelos portobello, shimeji e paris, finalizado com azeite trufado e parmesão.',
                'preco' => 53,
                'fk_empresa' => 1,
                'categoria' => 'Pratos Principais',
                'url_imagem' => 'https://images.unsplash.com/photo-1544025162-d76694265947?q=80&w=800&auto=format&fit=crop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 22,
                'nome_produto' => 'Salmão Grelhado',
                'descricao' => 'Filé de salmão grelhado com crosta de ervas, acompanhado de risoto de limão siciliano e legumes salteados.',
                'preco' => 66,
                'fk_empresa' => 1,
                'categoria' => 'Pratos Principais',
                'url_imagem' => 'https://images.unsplash.com/photo-1547496502-affa22d38842?q=80&w=800&auto=format&fit=crop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 23,
                'nome_produto' => 'Bife Ancho',
                'descricao' => 'Corte premium de 350g grelhado ao ponto de sua preferência, acompanhado de batatas rústicas e molho de vinho tinto.',
                'preco' => 73,
                'fk_empresa' => 1,
                'categoria' => 'Pratos Principais',
                'url_imagem' => 'https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=800&auto=format&fit=crop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 24,
                'nome_produto' => 'Salada Premium',
                'descricao' => 'Mix de folhas nobres, tomate cereja, palmito, azeitonas, queijo brie, nozes caramelizadas e molho de mostarda e mel.',
                'preco' => 39,
                'fk_empresa' => 1,
                'categoria' => 'Pratos Principais',
                'url_imagem' => 'https://images.unsplash.com/photo-1512621776951-a57141f2eefd?q=80&w=800&auto=format&fit=crop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 25,
                'nome_produto' => 'Feijoada Completa',
                'descricao' => 'Tradicional feijoada com carnes selecionadas, servida com arroz branco, couve refogada, farofa, laranja e torresmo.',
                'preco' => 59,
                'fk_empresa' => 1,
                'categoria' => 'Pratos Principais',
                'url_imagem' => 'https://images.unsplash.com/photo-1559847844-5315695dadae?q=80&w=800&auto=format&fit=crop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 27,
                'nome_produto' => 'Nachos Supremos',
                'descricao' => 'Tortilhas de milho crocantes cobertas com chili, queijo cheddar derretido, guacamole, pico de gallo e creme azedo.',
                'preco' => 37,
                'fk_empresa' => 1,
                'categoria' => 'Petiscos',
                'url_imagem' => 'https://images.unsplash.com/photo-1626645738196-c2a7c87a8f58?q=80&w=800&auto=format&fit=crop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 29,
                'nome_produto' => 'Coxinhas Gourmet',
                'descricao' => 'Porção com 8 unidades de mini coxinhas com recheios variados: frango com catupiry, costela com gorgonzola e abóbora com carne seca.',
                'preco' => 33,
                'fk_empresa' => 1,
                'categoria' => 'Petiscos',
                'url_imagem' => 'https://images.unsplash.com/photo-1579751626657-72bc17010498?q=80&w=800&auto=format&fit=crop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('produto')->insert($produtos);
    }
}