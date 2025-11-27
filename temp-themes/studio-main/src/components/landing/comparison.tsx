import { Card, CardHeader, CardContent } from "@/components/ui/card";
import { Check, X, Star } from "lucide-react";

export function Comparison() {
  return (
    <section className="w-full py-20 md:py-32 bg-background" id="comparison">
      <div className="container mx-auto px-4">
        <h2 className="font-headline text-4xl md:text-5xl font-black uppercase text-center tracking-wide">
          Por que o PornStar Coaching <span className="text-accent">é diferente?</span>
        </h2>
        <p className="text-center max-w-2xl mx-auto mt-4 text-lg text-muted-foreground">
          A diferença entre tentar sozinho e ter um método que realmente funciona.
        </p>
        <div className="grid md:grid-cols-3 gap-4 md:gap-8 mt-16 max-w-7xl mx-auto">
          
          <Card className="bg-secondary/20 border-border rounded-xl">
            <CardHeader className="text-center">
              <h3 className="text-xl font-bold">Conteúdos Gratuitos</h3>
              <p className="text-sm text-muted-foreground">YouTube, blogs, etc.</p>
            </CardHeader>
            <CardContent>
              <ul className="space-y-3">
                <li className="flex items-start gap-3"><X className="w-5 h-5 text-destructive mt-1"/>Informação fraca e superficial</li>
                <li className="flex items-start gap-3"><X className="w-5 h-5 text-destructive mt-1"/>Vídeos incompletos</li>
                <li className="flex items-start gap-3"><X className="w-5 h-5 text-destructive mt-1"/>Gera mais confusão que clareza</li>
              </ul>
            </CardContent>
          </Card>

          <Card className="bg-primary/20 border-2 border-primary rounded-xl scale-105 shadow-2xl shadow-primary/20">
             <CardHeader className="text-center">
               <Star className="w-8 h-8 text-amber-400 mx-auto mb-2"/>
              <h3 className="text-2xl font-bold">PornStar Coaching</h3>
              <p className="text-sm text-primary/80">O Método Completo</p>
            </CardHeader>
            <CardContent>
               <ul className="space-y-3">
                <li className="flex items-start gap-3"><Check className="w-5 h-5 text-green-500 mt-1"/>Passo a passo prático</li>
                <li className="flex items-start gap-3"><Check className="w-5 h-5 text-green-500 mt-1"/>Técnicas de profissionais</li>
                <li className="flex items-start gap-3"><Check className="w-5 h-5 text-green-500 mt-1"/>Resultados rápidos e visíveis</li>
              </ul>
            </CardContent>
          </Card>

          <Card className="bg-secondary/20 border-border rounded-xl">
            <CardHeader className="text-center">
              <h3 className="text-xl font-bold">Tentar Sozinho</h3>
              <p className="text-sm text-muted-foreground">Tentativa e erro</p>
            </CardHeader>
            <CardContent>
               <ul className="space-y-3">
                <li className="flex items-start gap-3"><X className="w-5 h-5 text-destructive mt-1"/>Anos de frustração</li>
                <li className="flex items-start gap-3"><X className="w-5 h-5 text-destructive mt-1"/>Custo emocional altíssimo</li>
                <li className="flex items-start gap-3"><X className="w-5 h-5 text-destructive mt-1"/>Vergonha e baixa autoestima</li>
              </ul>
            </CardContent>
          </Card>

        </div>
      </div>
    </section>
  );
}
